/* =============================================================================
   Motor de movimento — Vectra
   Implementa a especificação do sistema de movimento da casa (sistema-de-movimento.md):
   reveals por atributo com stagger e gatilho em 3 camadas, títulos palavra por palavra,
   cena travada horizontal (pin + scrub), contadores, barra de leitura, scroll suave
   próprio (lerp) e estados de header. Zero dependência externa.

   Calibragem: deslocamento 24px, blur 5px, easing cubic-bezier(.16,.84,.28,1),
   parallax <= .12, sem bounce.
   ============================================================================= */
(function () {
  'use strict';

  var html = document.documentElement;
  var reduce = matchMedia('(prefers-reduced-motion: reduce)');

  /* Se o usuário pede menos movimento, o motor nem liga: o gate sai e tudo
     fica visível por construção. */
  if (reduce.matches) {
    html.removeAttribute('data-motion');
    return;
  }

  var raf = requestAnimationFrame;
  var clamp = function (v, a, b) { return v < a ? a : v > b ? b : v; };

  /* --- rede de segurança: se algo lançar, o gate sai e o conteúdo aparece --- */
  var fuse = setTimeout(function () { html.removeAttribute('data-motion'); }, 4000);

  /* ===========================================================================
     1. Títulos palavra por palavra
     Só em h1/h2 de texto puro (um único nó de texto). Títulos com <strong>,
     <br> ou ícone são ignorados de propósito, para não quebrar a marcação.
     =========================================================================== */
  function splitTitles() {
    var els = document.querySelectorAll('[data-split]');
    for (var i = 0; i < els.length; i++) {
      var el = els[i];
      if (el.childNodes.length !== 1 || el.firstChild.nodeType !== 3) continue;
      var words = el.textContent.trim().split(/\s+/);
      var frag = document.createDocumentFragment();
      for (var w = 0; w < words.length; w++) {
        var s = document.createElement('span');
        s.className = 'w';
        var it = document.createElement('i');
        it.textContent = words[w];
        it.style.transitionDelay = (w * 42) + 'ms';
        s.appendChild(it);
        frag.appendChild(s);
        if (w < words.length - 1) frag.appendChild(document.createTextNode(' '));
      }
      el.textContent = '';
      el.appendChild(frag);
      /* o bloco em volta só faz fade: o texto carrega o movimento */
      var host = el.closest('[data-reveal]') || el;
      if (host === el) el.setAttribute('data-reveal', 'soft');
      else host.setAttribute('data-reveal', 'soft');
    }
  }

  /* ===========================================================================
     2. Reveals — stagger automático + gatilho em 3 camadas
     =========================================================================== */
  var revealed = [];

  function prepStagger() {
    /* irmãos diretos com data-reveal no mesmo pai: delay = índice * 80ms (máx 6) */
    var parents = new Set();
    document.querySelectorAll('[data-reveal]').forEach(function (el) {
      if (el.parentElement) parents.add(el.parentElement);
    });
    parents.forEach(function (p) {
      var sibs = [].filter.call(p.children, function (c) { return c.hasAttribute('data-reveal'); });
      if (sibs.length < 2) return;
      sibs.forEach(function (c, i) {
        if (c.style.transitionDelay) return;
        c.style.transitionDelay = (Math.min(i, 6) * 80) + 'ms';
      });
    });
  }

  function show(el) {
    if (el.hasAttribute('data-on')) return;
    el.setAttribute('data-on', '');
    revealed.push(el);
  }

  function showNow(el) {
    /* revela sem animação (usado em saltos de scroll) */
    var d = el.style.transitionDelay;
    el.style.transition = 'none';
    el.style.transitionDelay = '0ms';
    show(el);
    void el.offsetHeight;
    el.style.transition = '';
    el.style.transitionDelay = d;
  }

  var io = null;
  function initReveals() {
    var all = document.querySelectorAll('[data-reveal]');
    if (!all.length) return;

    io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { show(e.target); io.unobserve(e.target); }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -7% 0px' });

    all.forEach(function (el) { io.observe(el); });

    /* camada 1 — primeira tela entra por rAF + timeout.
       IntersectionObserver não dispara em documento oculto/aba de fundo. */
    var firstScreen = function () {
      var vh = innerHeight;
      all.forEach(function (el) {
        var r = el.getBoundingClientRect();
        if (r.top < vh * 0.94 && r.bottom > 0) { show(el); if (io) io.unobserve(el); }
      });
    };
    raf(firstScreen);
    setTimeout(firstScreen, 140);

    /* camada 3 — saltos de scroll (âncora, hash, arraste da barra) não geram
       callback do observer: descarrega tudo que já passou, sem animação. */
    var flush = function () {
      var lim = innerHeight * 0.3;
      all.forEach(function (el) {
        if (el.hasAttribute('data-on')) return;
        if (el.getBoundingClientRect().bottom < lim) { showNow(el); if (io) io.unobserve(el); }
      });
    };
    addEventListener('scroll', flush, { passive: true });
    addEventListener('hashchange', flush);
  }

  /* ===========================================================================
     3. Moldura de prancha que desenha (hero)
     =========================================================================== */
  function drawFrame() {
    var svg = document.querySelector('[data-frame]');
    if (!svg) return;
    var shapes = svg.querySelectorAll('rect,line');
    shapes.forEach(function (s, i) {
      var len;
      try { len = s.getTotalLength ? s.getTotalLength() : 0; } catch (e) { len = 0; }
      if (!len) {
        if (s.tagName === 'rect') {
          len = 2 * (parseFloat(s.getAttribute('width')) + parseFloat(s.getAttribute('height')));
        } else {
          len = Math.hypot(
            s.getAttribute('x2') - s.getAttribute('x1'),
            s.getAttribute('y2') - s.getAttribute('y1'));
        }
      }
      s.style.strokeDasharray = len;
      s.style.strokeDashoffset = len;
      s.style.transition = 'stroke-dashoffset 1.5s var(--e)';
      s.style.transitionDelay = (140 + i * 90) + 'ms';
      raf(function () { raf(function () { s.style.strokeDashoffset = '0'; }); });
    });
  }

  /* ===========================================================================
     4. Contadores
     =========================================================================== */
  function initCounters() {
    var els = document.querySelectorAll('[data-count]');
    if (!els.length) return;
    var cio = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var el = e.target;
        cio.unobserve(el);
        var sibs = [].slice.call(el.closest('[data-count-group]') ?
          el.closest('[data-count-group]').querySelectorAll('[data-count]') : [el]);
        var delay = sibs.indexOf(el) * 180;
        setTimeout(function () { run(el); }, delay < 0 ? 0 : delay);
      });
    }, { threshold: 0.4 });
    els.forEach(function (el) { cio.observe(el); });

    function run(el) {
      var to = parseFloat(el.getAttribute('data-count'));
      var pre = el.getAttribute('data-pre') || '';
      var t0 = performance.now(), dur = 1600;
      (function step(now) {
        var p = clamp((now - t0) / dur, 0, 1);
        var eased = 1 - Math.pow(1 - p, 3);           /* easeOutCubic */
        el.textContent = pre + Math.round(to * eased).toLocaleString('pt-BR');
        if (p < 1) raf(step);
      })(t0);
    }
  }

  /* ===========================================================================
     5. Cena travada horizontal — a jornada (pin + scrub)
     Só desktop: innerWidth >= 900 && innerHeight >= 560. Fora disso, a mesma
     marcação volta ao fluxo normal e as entradas assumem.
     ATENÇÃO: o wrapper sticky não pode ter position inline (mata o pin
     silenciosamente). O position vive no CSS, sob [data-pin="on"].
     =========================================================================== */
  function initScene() {
    var scene = document.querySelector('[data-scene]');
    if (!scene) return;
    var stick = scene.querySelector('.jor__stick');
    var track = scene.querySelector('.jor__track');
    var bar = scene.querySelector('.jor__rule i');
    if (!stick || !track) return;

    var span = 0, on = false;

    function measure() {
      var want = innerWidth >= 900 && innerHeight >= 560;
      if (want !== on) {
        on = want;
        scene.setAttribute('data-pin', on ? 'on' : 'off');
      }
      if (!on) {
        scene.style.height = '';
        track.style.transform = '';
        if (bar) bar.style.transform = '';
        return;
      }
      /* quanto a trilha excede a viewport */
      span = Math.max(0, track.scrollWidth - innerWidth + 48);
      /* altura da cena = 100vh + span (duração em px de rolagem) */
      scene.style.height = (innerHeight + span) + 'px';
      tick();
    }

    function tick() {
      if (!on) return;
      var r = scene.getBoundingClientRect();
      var total = scene.offsetHeight - innerHeight;
      var p = total > 0 ? clamp(-r.top / total, 0, 1) : 0;
      track.style.transform = 'translate3d(' + (-span * p) + 'px,0,0)';
      if (bar) bar.style.transform = 'scaleX(' + p + ')';
    }

    measure();
    addEventListener('scroll', tick, { passive: true });
    /* a altura em px precisa ser recalculada em TODO resize, não só na troca de modo */
    addEventListener('resize', measure);
    /* as fotos podem mudar a largura da trilha depois de carregar */
    addEventListener('load', measure);
  }

  /* ===========================================================================
     6. Parallax de faixas (<= .12) + zoom lento do hero
     =========================================================================== */
  function initParallax() {
    var els = [].slice.call(document.querySelectorAll('[data-para]'));
    if (!els.length) return;
    function tick() {
      var vh = innerHeight;
      for (var i = 0; i < els.length; i++) {
        var el = els[i];
        var r = el.parentElement.getBoundingClientRect();
        if (r.bottom < -80 || r.top > vh + 80) continue;
        var k = parseFloat(el.getAttribute('data-para')) || 0.1;
        var mid = r.top + r.height / 2 - vh / 2;
        el.style.transform = 'translate3d(0,' + (-mid * k).toFixed(2) + 'px,0)';
      }
    }
    tick();
    addEventListener('scroll', tick, { passive: true });
    addEventListener('resize', tick);
  }

  /* ===========================================================================
     7. Header + barra de leitura
     =========================================================================== */
  function initChrome() {
    var hdr = document.querySelector('.hdr');
    var prog = document.querySelector('.prog');
    var secs = [].slice.call(document.querySelectorAll('main section[id]'));
    var links = [].slice.call(document.querySelectorAll('.nav__a[href^="#"]'));

    function tick() {
      var y = scrollY;
      if (hdr) hdr.setAttribute('data-solid', y > 40 ? 'true' : 'false');
      if (prog) {
        var max = document.body.scrollHeight - innerHeight;
        prog.style.transform = 'scaleX(' + (max > 0 ? clamp(y / max, 0, 1) : 0) + ')';
      }
      /* scroll-spy: seção sob 38% da viewport */
      var mark = y + innerHeight * 0.38, cur = null;
      for (var i = 0; i < secs.length; i++) {
        var s = secs[i];
        if (s.offsetTop <= mark) cur = s.id;
      }
      links.forEach(function (a) {
        var is = a.getAttribute('href') === '#' + cur;
        if (is) a.setAttribute('aria-current', 'true');
        else a.removeAttribute('aria-current');
      });
    }
    tick();
    addEventListener('scroll', tick, { passive: true });
    addEventListener('resize', tick);
  }

  /* ===========================================================================
     8. Scroll suave próprio (lerp) — usa o scroll real da janela, então
     position:sticky, :target e a barra do navegador continuam funcionando.
     Só em ponteiro fino. Em touch fica o momentum nativo.
     =========================================================================== */
  var ss = { on: false, target: 0, cur: 0, run: false };

  function scrollable(el) {
    /* não sequestra o scroll sobre área rolável (lightbox, menu) — até 8 ancestrais */
    var n = 0;
    while (el && el !== document.body && n++ < 8) {
      var st = getComputedStyle(el);
      if (/(auto|scroll)/.test(st.overflowY) && el.scrollHeight > el.clientHeight + 2) return true;
      el = el.parentElement;
    }
    return false;
  }

  function initSmooth() {
    if (!matchMedia('(hover: hover) and (pointer: fine)').matches) return;
    ss.on = true;
    ss.target = ss.cur = scrollY;

    function maxY() { return document.body.scrollHeight - innerHeight; }

    function loop() {
      ss.cur += (ss.target - ss.cur) * 0.105;
      if (Math.abs(ss.target - ss.cur) < 0.4) { ss.cur = ss.target; ss.run = false; }
      else ss.run = true;
      scrollTo(0, ss.cur);
      if (ss.run) raf(loop);
    }

    function kick() { if (!ss.run) { ss.run = true; raf(loop); } }

    addEventListener('wheel', function (e) {
      /* overlay aberto (body travado) ou área rolável sob o cursor: scroll nativo */
      if (document.body.style.overflow === 'hidden' || document.body.classList.contains('nav-open')) return;
      if (scrollable(e.target)) return;
      e.preventDefault();
      ss.target = clamp(ss.target + e.deltaY, 0, maxY());
      kick();
    }, { passive: false });

    addEventListener('keydown', function (e) {
      var t = e.target;
      if (t && /^(INPUT|TEXTAREA|SELECT)$/.test(t.tagName)) return;
      if (document.body.style.overflow === 'hidden') return;
      var step = innerHeight * 0.86, d = null;
      if (e.key === 'PageDown' || (e.key === ' ' && !e.shiftKey)) d = step;
      else if (e.key === 'PageUp' || (e.key === ' ' && e.shiftKey)) d = -step;
      else if (e.key === 'ArrowDown') d = 90;
      else if (e.key === 'ArrowUp') d = -90;
      else if (e.key === 'Home') { ss.target = 0; kick(); return; }
      else if (e.key === 'End') { ss.target = maxY(); kick(); return; }
      if (d === null) return;
      e.preventDefault();
      ss.target = clamp(ss.target + d, 0, maxY());
      kick();
    });

    /* se o scroll vier de fora do motor (arraste da barra, teclado nativo),
       ressincroniza para o próximo wheel não "saltar". */
    addEventListener('scroll', function () {
      if (!ss.run) ss.target = ss.cur = scrollY;
    }, { passive: true });
  }

  /* âncoras: o motor cuida (o CSS está em scroll-behavior:auto) e desconta o header */
  function initAnchors() {
    document.addEventListener('click', function (e) {
      var a = e.target.closest && e.target.closest('a[href^="#"]');
      if (!a) return;
      var id = a.getAttribute('href');
      if (!id || id === '#') return;
      var t = document.querySelector(id);
      if (!t) return;
      e.preventDefault();

      var fromMenu = document.body.classList.contains('nav-open');
      if (fromMenu && window.vectraCloseNav) window.vectraCloseNav();

      setTimeout(function () {
        var hdrH = (document.querySelector('.hdr') || {}).offsetHeight || 76;
        var y = Math.max(0, t.getBoundingClientRect().top + scrollY - hdrH - 12);
        if (ss.on) {
          ss.target = y;
          if (!ss.run) { ss.run = true; raf(function step() {
            ss.cur += (ss.target - ss.cur) * 0.105;
            if (Math.abs(ss.target - ss.cur) < 0.4) { ss.cur = ss.target; ss.run = false; }
            scrollTo(0, ss.cur);
            if (ss.run) raf(step);
          }); }
        } else {
          scrollTo({ top: y, behavior: 'auto' });
        }
        history.replaceState(null, '', id);
      }, fromMenu ? 420 : 80);
    });
  }

  /* =========================================================================== */
  function boot() {
    try {
      splitTitles();
      prepStagger();
      initReveals();
      drawFrame();
      initCounters();
      initScene();
      initParallax();
      initChrome();
      initSmooth();
      initAnchors();
      clearTimeout(fuse);
    } catch (err) {
      clearTimeout(fuse);
      html.removeAttribute('data-motion');
      if (window.console) console.error('[motion]', err);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot);
  } else {
    boot();
  }
})();
