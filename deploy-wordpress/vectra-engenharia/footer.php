<?php
/**
 * Rodape.
 *
 * @package Vectra
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<footer class="ft">
  <div class="container">
    <div class="ft__top">
      <div>
        <span class="ft__logo"><svg viewBox="0 0 546.2352 118.695987" role="img" aria-label="Vectra Engenharia e Construções"><use href="#i-logo"/></svg></span>
        <p class="ft__p">Projetos de instalações em BIM. Desde 1997, de Curitiba
          para todo o Brasil.</p>
      </div>
      <div>
        <p class="ft__h">Navegação</p>
        <ul class="ft__l">
          <li><a href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#atuacao' ); ?>">Atuação</a></li>
          <li><a href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#disciplinas' ); ?>">Disciplinas</a></li>
          <li><a href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#jornada' ); ?>">Segmentos</a></li>
          <li><a href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#obras' ); ?>">Projetos</a></li>
          <li><a href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#vectra' ); ?>">A Vectra</a></li>
        </ul>
      </div>
      <div>
        <p class="ft__h">Contato</p>
        <ul class="ft__l">
          <li><a href="tel:+5541998292317">(41) 99829-2317</a> <span class="ft__tag">projetos</span></li>
          <li><a href="tel:+5541988665477">(41) 98866-5477</a> <span class="ft__tag">obras</span></li>
          <li>Rua Saldanha Marinho, 1753<br>Bigorrilho, Curitiba/PR<br>CEP 80730-180</li>
          <li><a href="https://www.instagram.com/vectraengenharia_e_construcoes/" target="_blank" rel="noopener">Instagram</a></li>
        </ul>
      </div>
    </div>
    <div class="ft__bot">
      <span>&copy; <span data-year>2026</span> Vectra Engenharia e Construções. Todos os direitos reservados.</span>
      <span><a href="<?php echo esc_url( vectra_link_pagina( 'politica-de-privacidade' ) ); ?>">Política de Privacidade</a> . <a href="<?php echo esc_url( vectra_link_pagina( 'fornecedores' ) ); ?>">Fornecedores e Trabalhe Conosco</a></span>
    </div>
  </div>
</footer>

<div class="lb" role="dialog" aria-modal="true" aria-label="Galeria da obra">
  <div class="lb__bar">
    <p class="lb__ttl"><span data-lb-seg></span><span class="lb__name" data-lb-title></span></p>
    <button class="lb__x" type="button" aria-label="Fechar galeria">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 5l14 14M19 5L5 19"/></svg>
    </button>
  </div>
  <div class="lb__stage">
    <img class="lb__img" alt="" width="1600" height="1067">
    <button class="lb__nav lb__nav--prev" type="button" aria-label="Foto anterior">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M15 4l-8 8 8 8"/></svg>
    </button>
    <button class="lb__nav lb__nav--next" type="button" aria-label="Próxima foto">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M9 4l8 8-8 8"/></svg>
    </button>
  </div>
  <p class="lb__foot"><span data-lb-count></span></p>
</div>

<!-- Player de vídeo (modal cinematográfico) -->
<div class="vlb" data-vlb role="dialog" aria-modal="true" aria-label="Vídeo da obra" hidden>
  <div class="vlb__bar">
    <p class="vlb__ttl"><span class="vlb__seg" data-vlb-sub></span><span class="vlb__name" data-vlb-title></span></p>
    <button class="vlb__x" type="button" aria-label="Fechar vídeo">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M5 5l14 14M19 5L5 19"/></svg>
    </button>
  </div>
  <div class="vlb__stage">
    <video class="vlb__v" data-vlb-video controls playsinline preload="none" width="1920" height="1080"></video>
  </div>
</div>

<!-- Consentimento LGPD -->
<div class="ck" role="region" aria-label="Aviso de cookies">
  <div class="container ck__in">
    <p class="ck__t">Usamos cookies para entender como o site é usado e melhorar a sua
      experiência. Você pode aceitar ou recusar. Veja a
      <a href="<?php echo esc_url( vectra_link_pagina( 'politica-de-privacidade' ) ); ?>">Política de Privacidade</a>.</p>
    <div class="ck__act">
      <button class="btn btn--light" type="button" data-consent="granted">Aceitar</button>
      <button class="btn btn--ghost-dark" type="button" data-consent="denied">Recusar</button>
    </div>
  </div>

<?php wp_footer(); ?>
<!-- BuildV: Merlin -->
<script nonce="674b0441fc6c35a4da4470bf0253f58e" src='https://scripts.gomerlin.com.br/merlin.js'></script>
<script>
  Merlin.Popup.initFromSource("https://tools.gomerlin.com.br/popup/ca1f1b11-eb88-43d1-bd83-7212df0e7126");
</script>
<!-- /BuildV: Merlin -->
</body>
</html>
