<?php
/**
 * Home (uma pagina).
 *
 * O conteudo espelha o site estatico:
 * mesma copy, mesmos assets, mesma marcacao.
 *
 * @package Vectra
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<main id="conteudo">

  <!-- ============ HERO: prancha tecnica ============ -->
  <section class="hero" aria-labelledby="h-hero">
    <div class="hero__bg">
      <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/hero-mix-poster.webp' ); ?>" alt="Obras da Vectra em movimento: Arena Brahma e a academia Bioritmo, em Curitiba" width="1920" height="1080" fetchpriority="high" decoding="async" data-para="0.055">
      <video class="hero__vid" autoplay muted loop playsinline preload="auto" poster="<?php echo esc_url( VECTRA_URI . '/assets/img/hero-mix-poster.webp' ); ?>" aria-hidden="true" data-para="0.055">
        <source src="<?php echo esc_url( VECTRA_URI . '/assets/video/hero-mix.mp4' ); ?>" type="video/mp4">
      </video>
    </div>
    <div class="hero__veil" aria-hidden="true"></div>

    <div class="container hero__in">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Curitiba/PR . Desde 1997</p>
      <h1 id="h-hero" data-split>Resolvemos no projeto o que viraria retrabalho na obra.</h1>
      <p class="hero__sub" data-reveal>Engenharia de instalações em BIM para incorporadoras e
        construtora. Um responsável do primeiro estudo preliminar à finalização da obra.</p>
      <div class="hero__act" data-reveal>
        <button class="btn btn--light" type="button" data-cta>Solicitar orçamento<svg class="btn__ar" viewBox="0 0 15 9" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M0 4.5h13.4M10 1l3.6 3.5L10 8"/></svg></button>
        <a class="btn btn--ghost-dark" href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#obras' ); ?>">Ver projetos</a>
      </div>
    </div>

  </section>

  <div class="afterhero">

  <!-- ============ 01 ATUACAO: duas frentes, editorial ============ -->
  <section class="sec" id="atuacao" aria-labelledby="h-atuacao">
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>01 . Atuação</p>
      <h2 id="h-atuacao" data-split>Um só projeto, todas as disciplinas.</h2>
      <p class="lede lede--gap" data-reveal>Na expansão, disciplinas espalhadas por fornecedores
        desconexos geram retrabalho e atraso. Uma inauguração fora da data custa faturamento
        e imagem de marca. A Vectra concentra tudo em um único projeto, compatibilizado em BIM.</p>

      <div class="frentes">
        <div class="frente" data-reveal data-rv="left">
          <div class="frente__t"><span class="frente__l">Projeto</span><h3>Projetos de instalações</h3></div>
          <p>Engenharia multidisciplinar integrada. A Vectra usa a metodologia BIM desde 2015:
            compatibilizamos todas as disciplinas ainda no projeto, em Revit, e entregamos
            documentação pronta para construção.</p>
          <p class="frente__meta"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Projetos em todo o Brasil, do Amazonas ao Rio Grande do Sul</p>
        </div>
        <div class="frente" data-reveal data-rv="right">
          <div class="frente__t"><span class="frente__l">BIM</span><h3>Compatibilização em BIM</h3></div>
          <p>Todas as disciplinas compatibilizadas em Revit antes da obra, com quantitativos
            vinculados ao modelo. Documentação pronta para construção, com menos erro e
            desperdício de material.</p>
          <p class="frente__meta"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Metodologia BIM desde 2015</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAIXA: cabine primaria ============ -->
  <section class="band" aria-label="Cabine primária entregue no Jockey Plaza, Curitiba">
    <div class="band__bg"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/faixa-tecnica.webp' ); ?>" alt="Cabine primária com quadros de média tensão entregue pela Vectra: a infraestrutura elétrica que sustenta a operação" loading="lazy" decoding="async" width="2000" height="1333" data-para="0.11"></div>
    <div class="container band__in">
      <p class="band__cap" data-reveal="soft">O que o cliente não vê é o que sustenta a operação dele.</p>
      <p class="band__meta" data-reveal><span>Modelagem BIM</span><span>Compatibilização de projetos</span><span>Instalações integradas</span></p>
    </div>
  </section>

  <!-- ============ 02 DISCIPLINAS: indice tecnico ============ -->
  <section class="sec" id="disciplinas" aria-labelledby="h-disc">
    <div class="malha" aria-hidden="true"></div>
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>02 . Disciplinas</p>
      <h2 id="h-disc" data-split>Oito disciplinas compatibilizadas antes da primeira parede.</h2>
      <p class="lede lede--gap" data-reveal>Cada projeto é validado, compatibilizado e
        testado digitalmente. O que está no papel funciona na obra.</p>

      <div class="disc">
          <div class="disc__i" data-reveal>
            <span class="disc__n">01</span>
            <div><h3 class="disc__t">Instalações elétricas</h3><p class="disc__d">Projetos executivos e luminotécnico.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">02</span>
            <div><h3 class="disc__t">Hidrossanitário e pluvial</h3><p class="disc__d">Água, esgoto, drenagem e reúso.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">03</span>
            <div><h3 class="disc__t">Climatização e exaustão</h3><p class="disc__d">Dimensionamento de HVAC e renovação de ar.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">04</span>
            <div><h3 class="disc__t">Proteção e combate a incêndio</h3><p class="disc__d">PPCI para aprovação em todas as instâncias.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">05</span>
            <div><h3 class="disc__t">SPDA</h3><p class="disc__d">Proteção contra descargas atmosféricas.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">06</span>
            <div><h3 class="disc__t">Telecomunicações e dados</h3><p class="disc__d">TV, internet, cabeamento estruturado e CFTV.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">07</span>
            <div><h3 class="disc__t">Gás</h3><p class="disc__d">GLP e gás natural.</p></div>
          </div>
          <div class="disc__i" data-reveal>
            <span class="disc__n">08</span>
            <div><h3 class="disc__t">Pressurização de escadas</h3><p class="disc__d">Escadas de emergência conforme norma.</p></div>
          </div>
        <p class="disc__foot" data-reveal>Modelagem em BIM desde o começo, com extração automatizada
          de quantitativos vinculada ao modelo, que reduz margem de erro e evita desperdício de material.</p>
      </div>
    </div>
  </section>

  <!-- ============ 03 JORNADA: cena travada horizontal ============ -->
  <section class="jor sec--dark" id="jornada" aria-labelledby="h-jor">
    <!-- profundidade em 3 camadas: foto real + degradê navy + malha da marca -->
    <div class="jor__layers" aria-hidden="true">
      <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/jornada.webp' ); ?>" alt="" loading="lazy" decoding="async" width="2400" height="1601" data-para="0.07">
      <span class="jor__veil"></span>
      <span class="jor__mesh"></span>
    </div>
    <div class="container jor__head">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>03 . Segmentos</p>
      <h2 id="h-jor" data-split>Um projeto para cada segmento.</h2>
    </div>
    <div class="jor__scene">
      <div class="container">
        <div class="jor__track">
          <article class="jor__step">
            <span class="jor__n">01</span>
            <p class="jor__k">Segmento 01 . Residencial</p>
            <h3 class="jor__t">Edifícios residenciais</h3>
            <p class="jor__p">Instalações completas para incorporadoras: elétrica, hidrossanitário, climatização, incêndio, SPDA, gás e telecom compatibilizados em BIM antes da obra, no prazo do lançamento.</p>
          </article>
          <article class="jor__step">
            <span class="jor__n">02</span>
            <p class="jor__k">Segmento 02 . Varejo</p>
            <h3 class="jor__t">Marcas de varejo</h3>
            <p class="jor__p">Projetos para redes em expansão, no padrão da marca e no prazo da inauguração. Disciplinas replicáveis loja a loja, com documentação pronta para aprovação e execução.</p>
          </article>
          <article class="jor__step">
            <span class="jor__n">03</span>
            <p class="jor__k">Segmento 03 . Grande porte</p>
            <h3 class="jor__t">Galpões e indústrias</h3>
            <p class="jor__p">Engenharia de instalações para grandes áreas — galpões logísticos e plantas industriais — com quantitativos vinculados ao modelo e extração automatizada.</p>
          </article>
        </div>
      </div>
    </div>
    <div class="container jor__foot">
      <p class="lede" data-reveal>Metodologia BIM desde 2015: cada disciplina compatibilizada
        no projeto, pronta para a obra, em qualquer segmento.</p>
    </div>
  </section>

  <!-- ============ 04 OBRAS: portfolio ============ -->
  <section class="sec" id="obras" aria-labelledby="h-obras">
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>04 . Projetos</p>
      <h2 id="h-obras" data-split>Projetos que saíram do papel.</h2>
      <p class="lede lede--gap" data-reveal>Fotografia real das unidades onde nossos projetos
        ganharam obra. Clique em um projeto para ver a galeria completa.</p>

            <div class="pfx">
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/vydea/01.webp|assets/img/portfolio/vydea/02.webp|assets/img/portfolio/vydea/03.webp|assets/img/portfolio/vydea/04.webp|assets/img/portfolio/vydea/05.webp|assets/img/portfolio/vydea/06.webp|assets/img/portfolio/vydea/07.webp|assets/img/portfolio/vydea/08.webp|assets/img/portfolio/vydea/09.webp"
          data-title="VYDEA" data-seg="Clube e fitness . Balneário Camboriú/SC"
          aria-label="Abrir galeria de 9 fotos: VYDEA">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/vydea/01.webp' ); ?>" alt="Clube e fitness VYDEA, Balneário Camboriú/SC" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">VYDEA</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 9 fotos</span>
          </span>
        </button>
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/arena-brahma/01.webp|assets/img/portfolio/arena-brahma/02.webp|assets/img/portfolio/arena-brahma/03.webp|assets/img/portfolio/arena-brahma/04.webp|assets/img/portfolio/arena-brahma/05.webp|assets/img/portfolio/arena-brahma/06.webp|assets/img/portfolio/arena-brahma/07.webp|assets/img/portfolio/arena-brahma/08.webp|assets/img/portfolio/arena-brahma/09.webp"
          data-title="Arena Brahma" data-seg="Bar e restaurante . Curitiba/PR"
          aria-label="Abrir galeria de 9 fotos: Arena Brahma">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/arena-brahma/01.webp' ); ?>" alt="Bar e restaurante Arena Brahma, Curitiba/PR" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">Arena Brahma</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 9 fotos</span>
          </span>
        </button>
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/bruna-passaura/01.webp|assets/img/portfolio/bruna-passaura/02.webp|assets/img/portfolio/bruna-passaura/03.webp|assets/img/portfolio/bruna-passaura/04.webp|assets/img/portfolio/bruna-passaura/05.webp|assets/img/portfolio/bruna-passaura/06.webp|assets/img/portfolio/bruna-passaura/07.webp|assets/img/portfolio/bruna-passaura/08.webp"
          data-title="Bruna Passaura Pátio Batel" data-seg="Varejo . Curitiba/PR"
          aria-label="Abrir galeria de 8 fotos: Bruna Passaura Pátio Batel">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/bruna-passaura/01.webp' ); ?>" alt="Varejo Bruna Passaura Pátio Batel, Curitiba/PR" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">Bruna Passaura Pátio Batel</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 8 fotos</span>
          </span>
        </button>
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/festval-batel/01.webp|assets/img/portfolio/festval-batel/02.webp|assets/img/portfolio/festval-batel/03.webp|assets/img/portfolio/festval-batel/04.webp|assets/img/portfolio/festval-batel/05.webp|assets/img/portfolio/festval-batel/06.webp|assets/img/portfolio/festval-batel/07.webp|assets/img/portfolio/festval-batel/08.webp|assets/img/portfolio/festval-batel/09.webp"
          data-title="Festval Batel" data-seg="Supermercado . Curitiba/PR"
          aria-label="Abrir galeria de 9 fotos: Festval Batel">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/festval-batel/01.webp' ); ?>" alt="Supermercado Festval Batel, Curitiba/PR" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">Festval Batel</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 9 fotos</span>
          </span>
        </button>
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/bioritmo-carlos-gomes/01.webp|assets/img/portfolio/bioritmo-carlos-gomes/02.webp|assets/img/portfolio/bioritmo-carlos-gomes/03.webp|assets/img/portfolio/bioritmo-carlos-gomes/04.webp|assets/img/portfolio/bioritmo-carlos-gomes/05.webp|assets/img/portfolio/bioritmo-carlos-gomes/06.webp|assets/img/portfolio/bioritmo-carlos-gomes/07.webp|assets/img/portfolio/bioritmo-carlos-gomes/08.webp|assets/img/portfolio/bioritmo-carlos-gomes/09.webp"
          data-title="Bioritmo Carlos Gomes" data-seg="Academia . Curitiba/PR"
          aria-label="Abrir galeria de 9 fotos: Bioritmo Carlos Gomes">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/bioritmo-carlos-gomes/01.webp' ); ?>" alt="Academia Bioritmo Carlos Gomes, Curitiba/PR" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">Bioritmo Carlos Gomes</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 9 fotos</span>
          </span>
        </button>
        <button class="pfx__item" type="button"
          data-gallery="assets/img/portfolio/jockey-plaza/01.webp|assets/img/portfolio/jockey-plaza/02.webp|assets/img/portfolio/jockey-plaza/03.webp|assets/img/portfolio/jockey-plaza/04.webp|assets/img/portfolio/jockey-plaza/05.webp|assets/img/portfolio/jockey-plaza/06.webp|assets/img/portfolio/jockey-plaza/07.webp|assets/img/portfolio/jockey-plaza/08.webp|assets/img/portfolio/jockey-plaza/09.webp"
          data-title="Jockey Plaza" data-seg="Shopping . Curitiba/PR"
          aria-label="Abrir galeria de 9 fotos: Jockey Plaza">
          <span class="pfx__media"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/jockey-plaza/01.webp' ); ?>" alt="Shopping Jockey Plaza, Curitiba/PR" loading="lazy" decoding="async" width="1920" height="1281" data-para="0.6"></span>
          <span class="pfx__veil" aria-hidden="true"></span>
                    <span class="pfx__cap">
            <span class="pfx__t">Jockey Plaza</span>
            <span class="pfx__view"><svg class="pfx__view-i" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="8" y="3" width="13" height="13" rx="1.6"/><path d="M16 20H5a2 2 0 0 1-2-2V7"/></svg>Ver galeria · 9 fotos</span>
          </span>
        </button>
      </div>
    </div>
  </section>

  <!-- ============ GRANDE PORTE: lista tipografica ============ -->
  <section class="sec sec--md sec--paper2" aria-labelledby="h-gp">
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Projetos de grande porte</p>
      <h2 id="h-gp" data-split>Metragem que já passou pela nossa prancha.</h2>
      <div class="gp">
          <div class="gp__r" data-reveal>
            <span class="gp__n">Linea</span><span class="gp__i">GT Building</span><span class="gp__a">33.204 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Etherea</span><span class="gp__i">A.Yoshii</span><span class="gp__a">32.509 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Alberi</span><span class="gp__i">Piemonte</span><span class="gp__a">25.440 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Infinity Tower</span><span class="gp__i">Bicalho</span><span class="gp__a">24.854 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Edifício EOS</span><span class="gp__i">Laguna</span><span class="gp__a">18.653 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Qoya</span><span class="gp__i">Piemonte</span><span class="gp__a">18.186 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Core Palácio</span><span class="gp__i">Gadens Incorporadora</span><span class="gp__a">17.870 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Yacht Tower</span><span class="gp__i">Bicalho</span><span class="gp__a">17.752 m²</span>
          </div>
      </div>
      <p class="gp__foot" data-reveal>Também no portfólio: Hospital Marcelino Champagnat,
        Grand Lodge Batel, Turin, Zenit, Jardim Aurora, Ornella, A.Andersen e Hol 1480.</p>
    </div>
  </section>

  <!-- ============ 05 VECTRA ============ -->
  <section class="sec" id="vectra" aria-labelledby="h-vectra">
    <div class="container">
      <div class="sobre">
        <div>
          <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>05 . Vectra</p>
          <h2 id="h-vectra" data-split>Três décadas resolvendo desafios complexos de engenharia.</h2>
          <p class="lede lede--gap" data-reveal>Referência em engenharia de alta
            performance, a Vectra entrega soluções que integram eficiência e precisão técnica.
            Nosso corpo técnico de engenheiros garante que cada detalhe do projeto
            seja executado no padrão que a marca do cliente exige. Do projeto à finalização
            da obra, sem aventura e sem improviso. Temos o propósito de ser agentes de evolução
            nas cidades onde atuamos.</p>
          <div class="pil">
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Excelência</h3><p class="pil__d">Buscamos a perfeição em cada projeto. Vectra, excelência em cada detalhe.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Compromisso</h3><p class="pil__d">Nossa dedicação vai além da entrega física da obra.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Inovação</h3><p class="pil__d">Metodologia BIM desde 2015 e atualização constante em tecnologia de projeto.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Transparência</h3><p class="pil__d">Comunicação aberta e honesta. Retorno rápido em cada interação.</p></div>
            </div>
          </div>
        </div>
        <figure class="sobre__fig" data-reveal="fig">
          <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/sobre-clearcorrect.webp' ); ?>" alt="Recepção do escritório corporativo Duvale, entregue pela Vectra" loading="lazy" decoding="async" width="1500" height="1200">
        </figure>
      </div>
    </div>
  </section>

  <!-- ============ MARCAS ============ -->
  <section class="marcas" aria-labelledby="h-marcas">
    <div class="container marcas__h">
      <h2 id="h-marcas" class="marcas__t">Marcas que confiam na entrega Vectra</h2>
    </div>
    <!-- A faixa visível é decorativa e duplicada (a animação anda -50%), então
         fica aria-hidden. A lista real, abaixo, é a que o leitor de tela recebe:
         sem ela a informação existiria só no movimento. -->
    <div class="mq" aria-hidden="true"><div class="mq__t"><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/SmartFit.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Nike.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Adidas.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Patio.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/MCD.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Palladium-1.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/AYoshii.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/SanRemo.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Laguna-1.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/AG7.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Swell.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/SmartFit.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Nike.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Adidas.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Patio.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/MCD.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Palladium-1.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/AYoshii.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/SanRemo.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Laguna-1.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/AG7.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span><span class="mq__i"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/logos/Swell.png' ); ?>" alt="" loading="lazy" decoding="async" width="330" height="116"></span></div></div>
    <ul class="sr" data-marcas-sr>
      <li>Smart Fit</li>
      <li>Nike</li>
      <li>Adidas</li>
      <li>Pátio Batel</li>
      <li>McDonald’s</li>
      <li>Shopping Palladium</li>
      <li>A.Yoshii</li>
      <li>San Remo</li>
      <li>Laguna</li>
      <li>AG7</li>
      <li>Swell</li>
    </ul>
  </section>

  <!-- ============ DA PRANCHA AO CANTEIRO: ancora obra ao projeto ============ -->
  <section class="sec" id="obra" aria-labelledby="h-obra">
    <div class="container">
      <div class="sobre sobre--inv">
        <figure class="sobre__fig" data-reveal="fig">
          <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/faixa-obra.webp' ); ?>" alt="Obra da Vectra em andamento, com as instalações passando sob a laje antes do acabamento" loading="lazy" decoding="async" width="960" height="1280">
        </figure>
        <div>
          <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Da prancha ao canteiro</p>
          <h2 id="h-obra" data-split>Quem projeta também executa.</h2>
          <p class="lede lede--gap" data-reveal>O projeto compatibilizado em BIM não para no papel.
            A mesma engenharia que dimensiona as disciplinas acompanha a execução, como construtora,
            no Sul e no Sudeste. Com projeto e obra sob um só responsável, o canteiro anda sem repasse
            entre fornecedores e sem retrabalho, no prazo da inauguração.</p>
          <div class="esc">
            <p class="esc__i" data-reveal><svg class="esc__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg><span>Um único contrato e um único responsável, do projeto à entrega</span></p>
            <p class="esc__i" data-reveal><svg class="esc__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg><span>Equipes especializadas em obras rápidas, com gestão de pessoas e processos</span></p>
            <p class="esc__i" data-reveal><svg class="esc__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg><span>Dimensionamento correto de largada: menos surpresa, mais previsibilidade de custo</span></p>
            <p class="esc__i" data-reveal><svg class="esc__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg><span>Mais de 38 obras executadas em 2025, até 10 em paralelo</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ 06 CONTATO ============ -->
  <section class="sec cta sec--dark" id="contato" aria-labelledby="h-contato">
    <div class="container">
      <div class="cta__grid">
        <div>
          <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>06 . Contato</p>
          <h2 id="h-contato" data-split>Como solicitar seu orçamento.</h2>
          <div class="cta__act" data-reveal>
            <button class="btn btn--light" type="button" data-cta>Solicitar orçamento<svg class="btn__ar" viewBox="0 0 15 9" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M0 4.5h13.4M10 1l3.6 3.5L10 8"/></svg></button>
          </div>
        </div>

        <div class="pass" data-reveal="soft">
          <div class="pass__line" aria-hidden="true"><i></i></div>
              <div class="pass__i" data-reveal>
                <span class="pass__dot"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span>
                <p class="pass__k">Passo 01</p>
                <h3 class="pass__t">Fale com a nossa equipe</h3>
                <p class="pass__d">Chame no WhatsApp e diga o segmento e a metragem do seu projeto.</p>
              </div>
              <div class="pass__i" data-reveal>
                <span class="pass__dot"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span>
                <p class="pass__k">Passo 02</p>
                <h3 class="pass__t">Entendemos o escopo</h3>
                <p class="pass__d">Um engenheiro analisa as disciplinas necessárias e o prazo que você precisa cumprir.</p>
              </div>
              <div class="pass__i" data-reveal>
                <span class="pass__dot"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span>
                <p class="pass__k">Passo 03</p>
                <h3 class="pass__t">Receba o orçamento</h3>
                <p class="pass__d">Escopo fechado, com prazo e disciplinas discriminadas.</p>
              </div>
        </div>
      </div>
    </div>
  </section>
  </div>
</main>

<?php get_footer();
