/* =============================================================================
   Vectra — comportamentos da página (independentes do motor de movimento):
   menu off-canvas, lightbox de galeria por obra, botões de WhatsApp e
   banner de consentimento LGPD.
   ============================================================================= */
(function () {
  'use strict';

  /* ---------------------------------------------------------------------------
     WhatsApp — número centralizado numa constante.
     Fonte: deck "Vectra 2026 - Fitness turn key" (Ketlyn Almeida, comercial).
     --------------------------------------------------------------------------- */
  var WA = '5541998292317';

  document.querySelectorAll('[data-wa-btn]').forEach(function (b) {
    var ctx = b.getAttribute('data-wa-btn') || '';
    var msg = 'Ola! Vim pelo site da Vectra e gostaria de solicitar um orcamento'
      + (ctx ? ' de ' + ctx : '') + '.';
    b.setAttribute('href', 'https://wa.me/' + WA + '?text=' + encodeURIComponent(msg));
    b.setAttribute('target', '_blank');
    b.setAttribute('rel', 'noopener');
  });

  /* ---------------------------------------------------------------------------
     Menu off-canvas
     --------------------------------------------------------------------------- */
  var burger = document.querySelector('.hdr__burger');
  var nav = document.querySelector('.nav');
  var scrim = document.querySelector('.nav-scrim');

  function closeNav() {
    document.body.classList.remove('nav-open');
    if (burger) burger.setAttribute('aria-expanded', 'false');
  }
  window.vectraCloseNav = closeNav;

  if (burger && nav) {
    burger.addEventListener('click', function () {
      var open = document.body.classList.toggle('nav-open');
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    if (scrim) scrim.addEventListener('click', closeNav);
    addEventListener('keydown', function (e) { if (e.key === 'Escape') closeNav(); });
    addEventListener('resize', function () {
      if (innerWidth > 900) closeNav();
    });
  }

  /* ---------------------------------------------------------------------------
     Lightbox — galeria por obra.
     Cada card leva data-gallery="p1|p2|..." e o JS cicla dentro dessa lista.
     --------------------------------------------------------------------------- */
  var lb = document.querySelector('.lb');
  if (lb) {
    var lbImg = lb.querySelector('.lb__img');
    var lbTtl = lb.querySelector('[data-lb-title]');
    var lbSeg = lb.querySelector('[data-lb-seg]');
    var lbCount = lb.querySelector('[data-lb-count]');
    var btnPrev = lb.querySelector('.lb__nav--prev');
    var btnNext = lb.querySelector('.lb__nav--next');
    var btnX = lb.querySelector('.lb__x');
    var list = [], idx = 0, lastFocus = null;

    var curTitle = '';

    function render() {
      lbImg.setAttribute('src', list[idx]);
      lbImg.setAttribute('alt', curTitle + ', foto ' + (idx + 1) + ' de ' + list.length);
      lbCount.textContent = (idx + 1) + ' / ' + list.length;
      var many = list.length > 1;
      btnPrev.hidden = !many;
      btnNext.hidden = !many;
    }

    function open(card) {
      list = (card.getAttribute('data-gallery') || '').split('|').filter(Boolean);
      if (!list.length) return;
      idx = 0;
      lastFocus = card;
      curTitle = card.getAttribute('data-title') || 'Obra';
      lbTtl.textContent = curTitle;
      lbSeg.textContent = card.getAttribute('data-seg') || '';
      render();
      lb.setAttribute('data-open', 'true');
      document.body.style.overflow = 'hidden';     /* trava o scroll do body */
      btnX.focus();
    }

    function close() {
      lb.removeAttribute('data-open');
      document.body.style.overflow = '';
      if (lastFocus) lastFocus.focus();
    }

    function go(d) {
      idx = (idx + d + list.length) % list.length;
      render();
    }

    document.querySelectorAll('[data-gallery]').forEach(function (c) {
      c.addEventListener('click', function () { open(c); });
    });

    btnX.addEventListener('click', close);
    btnPrev.addEventListener('click', function () { go(-1); });
    btnNext.addEventListener('click', function () { go(1); });
    lb.addEventListener('click', function (e) { if (e.target === lb) close(); });

    addEventListener('keydown', function (e) {
      if (lb.getAttribute('data-open') !== 'true') return;
      if (e.key === 'Escape') { e.preventDefault(); close(); }
      else if (e.key === 'ArrowLeft') { e.preventDefault(); go(-1); }
      else if (e.key === 'ArrowRight') { e.preventDefault(); go(1); }
      else if (e.key === 'Tab') {
        /* foco preso no diálogo */
        var f = [].filter.call(lb.querySelectorAll('button'), function (b) { return !b.hidden; });
        if (!f.length) return;
        var first = f[0], last = f[f.length - 1];
        if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
        else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
      }
    });

    /* arraste lateral no touch */
    var x0 = null;
    lb.addEventListener('touchstart', function (e) { x0 = e.touches[0].clientX; }, { passive: true });
    lb.addEventListener('touchend', function (e) {
      if (x0 === null || list.length < 2) return;
      var dx = e.changedTouches[0].clientX - x0;
      if (Math.abs(dx) > 46) go(dx < 0 ? 1 : -1);
      x0 = null;
    }, { passive: true });
  }

  /* ---------------------------------------------------------------------------
     Consentimento LGPD.
     O consentimento emite evento no dataLayer para as tags respeitarem a lei.
     --------------------------------------------------------------------------- */
  var ck = document.querySelector('.ck');
  if (ck) {
    var KEY = 'vectra:consent';
    window.dataLayer = window.dataLayer || [];

    function emit(v) {
      window.dataLayer.push({ event: 'consent_update', consent_state: v });
    }

    var saved = null;
    try { saved = localStorage.getItem(KEY); } catch (e) { /* modo privado */ }

    if (saved) {
      emit(saved);
    } else {
      ck.setAttribute('data-open', 'true');
    }

    ck.querySelectorAll('[data-consent]').forEach(function (b) {
      b.addEventListener('click', function () {
        var v = b.getAttribute('data-consent');
        try { localStorage.setItem(KEY, v); } catch (e) { /* sem persistência */ }
        emit(v);
        ck.removeAttribute('data-open');
      });
    });
  }

  /* ---------------------------------------------------------------------------
     Ano do rodapé
     --------------------------------------------------------------------------- */
  var yr = document.querySelector('[data-year]');
  if (yr) yr.textContent = new Date().getFullYear();
})();
