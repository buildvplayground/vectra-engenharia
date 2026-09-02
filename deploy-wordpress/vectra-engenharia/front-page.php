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
    <div class="hero__bg"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/hero.webp' ); ?>" alt="Festval Batel, em Curitiba, entregue pela Vectra, visto da rua ao anoitecer" width="2400" height="1600" fetchpriority="high" decoding="async" data-para="0.055"></div>
    <div class="hero__veil" aria-hidden="true"></div>

    <div class="hero__frame" aria-hidden="true">
      <svg data-frame preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="1">
        <rect x="0.5" y="0.5" width="99" height="99"/>
        <line x1="0.5" y1="14" x2="7" y2="14"/><line x1="14" y1="0.5" x2="14" y2="7"/>
        <line x1="93" y1="0.5" x2="93" y2="7"/><line x1="99.5" y1="14" x2="93" y2="14"/>
        <line x1="0.5" y1="86" x2="7" y2="86"/><line x1="14" y1="99.5" x2="14" y2="93"/>
      </svg>
    </div>

    <div class="container hero__in">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Curitiba/PR . Desde 1997</p>
      <h1 id="h-hero" data-split>Resolvemos no projeto o que viraria retrabalho na obra.</h1>
      <p class="hero__sub" data-reveal>Engenharia de instalações em BIM e obra turn key para construtoras,
        redes de varejo e marcas de fitness em expansão. Um responsável do primeiro estudo
        à entrega das chaves.</p>
      <div class="hero__act" data-reveal>
        <a class="btn btn--light" data-wa-btn="" href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#contato' ); ?>">Solicitar orçamento<svg class="btn__ar" viewBox="0 0 15 9" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M0 4.5h13.4M10 1l3.6 3.5L10 8"/></svg></a>
        <a class="btn btn--ghost-dark" href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#obras' ); ?>">Ver obras entregues</a>
      </div>
    </div>

    <!-- selo/legenda tecnica, como o carimbo de uma prancha -->
    <dl class="plate" data-reveal="soft">
      <dt class="plate__k">Cliente</dt><dd class="plate__v">Construtoras, varejo, fitness</dd>
      <dt class="plate__k">Disciplinas</dt><dd class="plate__v">08 integradas em Revit</dd>
      <dt class="plate__k">Projetos</dt><dd class="plate__v">Todo o Brasil</dd>
      <dt class="plate__k">Obra</dt><dd class="plate__v">Sul e Sudeste</dd>
    </dl>
  </section>

  <!-- ============ NUMEROS ============ -->
  <section class="stats" aria-label="Vectra em números">
    <div class="container">
      <div class="stats__grid" data-count-group>
        <div class="stats__i"><p class="stats__n"><span data-count="200" data-pre="+">+200</span></p><p class="stats__l">projetos entregues em 2025</p></div>
        <div class="stats__i"><p class="stats__n"><span data-count="38" data-pre="+">+38</span></p><p class="stats__l">obras executadas em 2025</p></div>
        <div class="stats__i"><p class="stats__n"><span data-count="10">10</span></p><p class="stats__l">obras conduzidas em paralelo</p></div>
        <div class="stats__i"><p class="stats__n">1997</p><p class="stats__l">ano de fundação da Vectra</p></div>
      </div>
    </div>
  </section>

  <!-- ============ 01 ATUACAO: duas frentes, editorial ============ -->
  <section class="sec" id="atuacao" aria-labelledby="h-atuacao">
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>01 . Atuação</p>
      <h2 id="h-atuacao" data-split>Duas frentes, um único responsável.</h2>
      <p class="lede lede--gap" data-reveal>Na expansão, projeto e obra em fornecedores
        desconexos geram retrabalho e atraso. Uma inauguração fora da data custa faturamento
        e imagem de marca. A Vectra assume a jornada inteira.</p>

      <div class="frentes">
        <div class="frente" data-reveal data-rv="left">
          <div class="frente__t"><span class="frente__l">Frente A</span><h3>Projetos de instalações</h3></div>
          <p>Engenharia multidisciplinar integrada em BIM. Compatibilizamos todas as disciplinas
            ainda no projeto, em Revit, e entregamos documentação pronta para construção.</p>
          <p class="frente__meta"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Capacidade em todo o Brasil, do Amazonas ao Rio Grande do Sul</p>
        </div>
        <div class="frente" data-reveal data-rv="right">
          <div class="frente__t"><span class="frente__l">Frente B</span><h3>Obra turn key</h3></div>
          <p>Unidade executada e entregue pronta para operar. Um único contrato e um único
            responsável até a conclusão, sem repasse entre fornecedores.</p>
          <p class="frente__meta"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Execução no Sul e Sudeste do Brasil</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAIXA: cabine primaria ============ -->
  <section class="band" aria-label="Cabine primária entregue no Jockey Plaza, Curitiba">
    <div class="band__bg"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/faixa-tecnica.webp' ); ?>" alt="Cabine primária com quadros de média tensão instalada no Jockey Plaza, em Curitiba" loading="lazy" decoding="async" width="2000" height="1333" data-para="0.11"></div>
    <div class="container band__in">
      <p class="band__cap" data-reveal="soft">O que o cliente não vê é o que sustenta a operação dele.</p>
      <p class="band__meta" data-reveal><span>Jockey Plaza</span><span>Curitiba/PR</span><span>Cabine primária e instalações elétricas</span></p>
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
            <div><h3 class="disc__t">Instalações elétricas</h3><p class="disc__d">Projetos executivos e laudos técnicos.</p></div>
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
        <p class="disc__foot" data-reveal>Complementares: projeto luminotécnico e projeto estrutural.
          Modelagem em BIM desde o começo, com extração automatizada de quantitativos vinculada
          ao modelo, que reduz margem de erro e evita desperdício de material.</p>
      </div>
    </div>
  </section>

  <!-- ============ 03 JORNADA: cena travada horizontal ============ -->
  <section class="jor sec--dark" id="jornada" aria-labelledby="h-jor">
    <div class="container jor__head">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>03 . Jornada</p>
      <h2 id="h-jor" data-split>Uma única jornada, um único responsável.</h2>
    </div>
    <div class="jor__scene" data-scene>
      <div class="jor__stick">
        <div class="container">
          <div class="jor__track">
            <article class="jor__step">
              <span class="jor__n">01</span>
              <p class="jor__k">Etapa 01 . O início</p>
              <h3 class="jor__t">Projeto de instalações</h3>
              <p class="jor__p">Elétrico, estrutural, hidrossanitário, climatização e exaustão, SPDA, telecom, gás, drenagem e pressurização de escadas. Compatibilização entre todas as disciplinas ainda no projeto, em Revit e BIM, que elimina conflito e retrabalho na obra.</p>
            </article>
            <article class="jor__step">
              <span class="jor__n">02</span>
              <p class="jor__k">Etapa 02 . A gestão</p>
              <h3 class="jor__t">Planejamento e compatibilização</h3>
              <p class="jor__p">Cronograma ancorado na data do cliente, com planejamento semanal e acompanhamento diário. Coordenação técnica com rastreabilidade: o cliente sempre sabe em que fase a obra está e quais são os próximos passos.</p>
            </article>
            <article class="jor__step">
              <span class="jor__n">03</span>
              <p class="jor__k">Etapa 03 . A entrega</p>
              <h3 class="jor__t">Obra turn key</h3>
              <p class="jor__p">Obra executada e entregue pronta para operar. Um único contrato e um único responsável até a conclusão, sem repasse entre fornecedores. Qualidade dos materiais às soluções construtivas.</p>
            </article>
          </div>
          <div class="jor__rule" aria-hidden="true"><i></i></div>
        </div>
      </div>
    </div>
    <div class="container jor__foot">
      <p class="lede" data-reveal>Metodologia BIM, gestão contínua e alto padrão de acabamento:
        qualidade técnica integrada e controle operacional em escala.</p>
    </div>
  </section>

  <!-- ============ FAIXA: obra em andamento ============ -->
  <section class="band" aria-label="Obra em andamento do Smart Fit de Mogi das Cruzes">
    <div class="band__bg"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/faixa-obra.webp' ); ?>" alt="Interior em obra da unidade Smart Fit de Mogi das Cruzes, com estrutura aparente" loading="lazy" decoding="async" width="2000" height="1500" data-para="0.11"></div>
    <div class="container band__in">
      <p class="band__cap" data-reveal="soft">Cronograma ancorado na data de inauguração do cliente.</p>
      <p class="band__meta" data-reveal><span>Smart Fit Mogi das Cruzes</span><span>Mogi das Cruzes/SP</span><span>Obra em andamento</span></p>
    </div>
  </section>

  <!-- ============ 04 OBRAS: portfolio ============ -->
  <section class="sec" id="obras" aria-labelledby="h-obras">
    <div class="container">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>04 . Obras</p>
      <h2 id="h-obras" data-split>Obras entregues e em andamento.</h2>
      <p class="lede lede--gap" data-reveal>Fotografia real das unidades onde nossos
        projetos e nossa execução saíram do papel. Clique em uma obra para ver a galeria completa.</p>

      <div class="pf">
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/vydea/01.webp|assets/img/portfolio/vydea/02.webp|assets/img/portfolio/vydea/03.webp|assets/img/portfolio/vydea/04.webp|assets/img/portfolio/vydea/05.webp|assets/img/portfolio/vydea/06.webp|assets/img/portfolio/vydea/07.webp|assets/img/portfolio/vydea/08.webp|assets/img/portfolio/vydea/09.webp"
            data-title="VYDEA" data-seg="Clube e fitness . Balneário Camboriú/SC"
            aria-label="Abrir galeria de 9 fotos: VYDEA">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/vydea/01.webp' ); ?>" alt="Clube e fitness VYDEA, Balneário Camboriú/SC" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Clube e fitness</span>
              <span class="pf__t">VYDEA</span>
              <span class="pf__m"><span>Balneário Camboriú/SC</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/smartfit-esteio/01.webp|assets/img/portfolio/smartfit-esteio/02.webp|assets/img/portfolio/smartfit-esteio/03.webp|assets/img/portfolio/smartfit-esteio/04.webp|assets/img/portfolio/smartfit-esteio/05.webp|assets/img/portfolio/smartfit-esteio/06.webp|assets/img/portfolio/smartfit-esteio/07.webp|assets/img/portfolio/smartfit-esteio/08.webp|assets/img/portfolio/smartfit-esteio/09.webp"
            data-title="Smart Fit Esteio" data-seg="Academia . Esteio/RS"
            aria-label="Abrir galeria de 9 fotos: Smart Fit Esteio">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/smartfit-esteio/01.webp' ); ?>" alt="Academia Smart Fit Esteio, Esteio/RS" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Academia</span>
              <span class="pf__t">Smart Fit Esteio</span>
              <span class="pf__m"><span>Esteio/RS</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/festval-batel/01.webp|assets/img/portfolio/festval-batel/02.webp|assets/img/portfolio/festval-batel/03.webp|assets/img/portfolio/festval-batel/04.webp|assets/img/portfolio/festval-batel/05.webp|assets/img/portfolio/festval-batel/06.webp|assets/img/portfolio/festval-batel/07.webp|assets/img/portfolio/festval-batel/08.webp|assets/img/portfolio/festval-batel/09.webp"
            data-title="Festval Batel" data-seg="Supermercado . Curitiba/PR"
            aria-label="Abrir galeria de 9 fotos: Festval Batel">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/festval-batel/01.webp' ); ?>" alt="Supermercado Festval Batel, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Supermercado</span>
              <span class="pf__t">Festval Batel</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/jockey-plaza/01.webp|assets/img/portfolio/jockey-plaza/02.webp|assets/img/portfolio/jockey-plaza/03.webp|assets/img/portfolio/jockey-plaza/04.webp|assets/img/portfolio/jockey-plaza/05.webp|assets/img/portfolio/jockey-plaza/06.webp|assets/img/portfolio/jockey-plaza/07.webp|assets/img/portfolio/jockey-plaza/08.webp|assets/img/portfolio/jockey-plaza/09.webp"
            data-title="Jockey Plaza" data-seg="Shopping . Curitiba/PR"
            aria-label="Abrir galeria de 9 fotos: Jockey Plaza">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/jockey-plaza/01.webp' ); ?>" alt="Shopping Jockey Plaza, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Shopping</span>
              <span class="pf__t">Jockey Plaza</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/bioritmo-carlos-gomes/01.webp|assets/img/portfolio/bioritmo-carlos-gomes/02.webp|assets/img/portfolio/bioritmo-carlos-gomes/03.webp|assets/img/portfolio/bioritmo-carlos-gomes/04.webp|assets/img/portfolio/bioritmo-carlos-gomes/05.webp|assets/img/portfolio/bioritmo-carlos-gomes/06.webp|assets/img/portfolio/bioritmo-carlos-gomes/07.webp|assets/img/portfolio/bioritmo-carlos-gomes/08.webp|assets/img/portfolio/bioritmo-carlos-gomes/09.webp"
            data-title="Bioritmo Carlos Gomes" data-seg="Academia . Curitiba/PR"
            aria-label="Abrir galeria de 9 fotos: Bioritmo Carlos Gomes">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/bioritmo-carlos-gomes/01.webp' ); ?>" alt="Academia Bioritmo Carlos Gomes, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Academia</span>
              <span class="pf__t">Bioritmo Carlos Gomes</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/arena-brahma/01.webp|assets/img/portfolio/arena-brahma/02.webp|assets/img/portfolio/arena-brahma/03.webp|assets/img/portfolio/arena-brahma/04.webp|assets/img/portfolio/arena-brahma/05.webp|assets/img/portfolio/arena-brahma/06.webp|assets/img/portfolio/arena-brahma/07.webp|assets/img/portfolio/arena-brahma/08.webp|assets/img/portfolio/arena-brahma/09.webp"
            data-title="Arena Brahma" data-seg="Bar e restaurante . Curitiba/PR"
            aria-label="Abrir galeria de 9 fotos: Arena Brahma">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/arena-brahma/01.webp' ); ?>" alt="Bar e restaurante Arena Brahma, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Bar e restaurante</span>
              <span class="pf__t">Arena Brahma</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/smartfit-mogi/01.webp|assets/img/portfolio/smartfit-mogi/02.webp|assets/img/portfolio/smartfit-mogi/03.webp|assets/img/portfolio/smartfit-mogi/04.webp|assets/img/portfolio/smartfit-mogi/05.webp|assets/img/portfolio/smartfit-mogi/06.webp|assets/img/portfolio/smartfit-mogi/07.webp|assets/img/portfolio/smartfit-mogi/08.webp|assets/img/portfolio/smartfit-mogi/09.webp"
            data-title="Smart Fit Mogi das Cruzes" data-seg="Academia . Mogi das Cruzes/SP"
            aria-label="Abrir galeria de 9 fotos: Smart Fit Mogi das Cruzes">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/smartfit-mogi/01.webp' ); ?>" alt="Academia Smart Fit Mogi das Cruzes, Mogi das Cruzes/SP" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Academia</span>
              <span class="pf__t">Smart Fit Mogi das Cruzes</span>
              <span class="pf__m"><span>Mogi das Cruzes/SP</span><span>9 fotos</span><span class="pf__tag">em andamento</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/duvale/01.webp|assets/img/portfolio/duvale/02.webp|assets/img/portfolio/duvale/03.webp|assets/img/portfolio/duvale/04.webp|assets/img/portfolio/duvale/05.webp|assets/img/portfolio/duvale/06.webp|assets/img/portfolio/duvale/07.webp|assets/img/portfolio/duvale/08.webp|assets/img/portfolio/duvale/09.webp"
            data-title="Duvale" data-seg="Escritório"
            aria-label="Abrir galeria de 9 fotos: Duvale">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/duvale/01.webp' ); ?>" alt="Escritório Duvale" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Escritório</span>
              <span class="pf__t">Duvale</span>
              <span class="pf__m"><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/bruna-passaura/01.webp|assets/img/portfolio/bruna-passaura/02.webp|assets/img/portfolio/bruna-passaura/03.webp|assets/img/portfolio/bruna-passaura/04.webp|assets/img/portfolio/bruna-passaura/05.webp|assets/img/portfolio/bruna-passaura/06.webp|assets/img/portfolio/bruna-passaura/07.webp|assets/img/portfolio/bruna-passaura/08.webp"
            data-title="Bruna Passaura Pátio Batel" data-seg="Varejo . Curitiba/PR"
            aria-label="Abrir galeria de 8 fotos: Bruna Passaura Pátio Batel">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/bruna-passaura/01.webp' ); ?>" alt="Varejo Bruna Passaura Pátio Batel, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Varejo</span>
              <span class="pf__t">Bruna Passaura Pátio Batel</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>8 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/studio-802/01.webp|assets/img/portfolio/studio-802/02.webp|assets/img/portfolio/studio-802/03.webp|assets/img/portfolio/studio-802/04.webp|assets/img/portfolio/studio-802/05.webp|assets/img/portfolio/studio-802/06.webp|assets/img/portfolio/studio-802/07.webp|assets/img/portfolio/studio-802/08.webp|assets/img/portfolio/studio-802/09.webp"
            data-title="Studio 802" data-seg="Residencial"
            aria-label="Abrir galeria de 9 fotos: Studio 802">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/studio-802/01.webp' ); ?>" alt="Residencial Studio 802" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Residencial</span>
              <span class="pf__t">Studio 802</span>
              <span class="pf__m"><span>9 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/smartfit-barigui/01.webp|assets/img/portfolio/smartfit-barigui/02.webp|assets/img/portfolio/smartfit-barigui/03.webp|assets/img/portfolio/smartfit-barigui/04.webp|assets/img/portfolio/smartfit-barigui/05.webp|assets/img/portfolio/smartfit-barigui/06.webp|assets/img/portfolio/smartfit-barigui/07.webp"
            data-title="Smart Fit Barigui" data-seg="Academia . Curitiba/PR"
            aria-label="Abrir galeria de 7 fotos: Smart Fit Barigui">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/smartfit-barigui/01.webp' ); ?>" alt="Academia Smart Fit Barigui, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Academia</span>
              <span class="pf__t">Smart Fit Barigui</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>7 fotos</span></span>
            </span>
          </button>
          <button class="pf__c" type="button" data-reveal="fig"
            data-gallery="assets/img/portfolio/smartfit-novo-mundo/01.webp|assets/img/portfolio/smartfit-novo-mundo/02.webp|assets/img/portfolio/smartfit-novo-mundo/03.webp|assets/img/portfolio/smartfit-novo-mundo/04.webp|assets/img/portfolio/smartfit-novo-mundo/05.webp|assets/img/portfolio/smartfit-novo-mundo/06.webp|assets/img/portfolio/smartfit-novo-mundo/07.webp"
            data-title="Smart Fit Novo Mundo" data-seg="Academia . Curitiba/PR"
            aria-label="Abrir galeria de 7 fotos: Smart Fit Novo Mundo">
            <span class="pf__fig">
              <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/portfolio/smartfit-novo-mundo/01.webp' ); ?>" alt="Academia Smart Fit Novo Mundo, Curitiba/PR" loading="lazy" decoding="async" width="1500" height="1000">
              <span class="pf__zoom"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><circle cx="10.5" cy="10.5" r="6.5"/><path d="M15.4 15.4 21 21M10.5 7.6v5.8M7.6 10.5h5.8"/></svg></span>
            </span>
            <span class="pf__body">
              <span class="pf__seg"><svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Academia</span>
              <span class="pf__t">Smart Fit Novo Mundo</span>
              <span class="pf__m"><span>Curitiba/PR</span><span>7 fotos</span></span>
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
            <span class="gp__n">Core Palácio</span><span class="gp__i">Thá Engenharia</span><span class="gp__a">17.870 m²</span>
          </div>
          <div class="gp__r" data-reveal>
            <span class="gp__n">Yacht Tower</span><span class="gp__i">Bicalho</span><span class="gp__a">17.752 m²</span>
          </div>
      </div>
      <p class="gp__foot" data-reveal>Também no portfólio: Hospital Marcelino Champagnat,
        Grand Lodge Batel, Turin, Zenit, Jardim Aurora, Ornella, A.Andersen e Hol 1480.</p>
    </div>
  </section>

  <!-- ============ FAIXA: arena ============ -->
  <section class="band" aria-label="Arena Brahma, no estádio em Curitiba">
    <div class="band__bg"><img src="<?php echo esc_url( VECTRA_URI . '/assets/img/faixa-arena.webp' ); ?>" alt="Salão do Arena Brahma voltado para o gramado do estádio, em Curitiba" loading="lazy" decoding="async" width="2000" height="1333" data-para="0.11"></div>
    <div class="container band__in">
      <p class="band__cap" data-reveal="soft">1.230 m² de projeto e obra dentro de um estádio em operação.</p>
      <p class="band__meta" data-reveal><span>Arena Brahma</span><span>Curitiba/PR</span><span>Projetos e obra</span></p>
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
            Nosso corpo técnico de engenheiros e arquitetos garante que cada detalhe do projeto
            seja executado no padrão que a marca do cliente exige. Do projeto à entrega das
            chaves, sem aventura e sem improviso.</p>
          <div class="pil">
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Experiência sólida</h3><p class="pil__d">Desde 1997 resolvendo desafios complexos de engenharia para construtoras, varejo, saúde, indústria e fitness.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Assertividade</h3><p class="pil__d">Projetos executados visando redução de custo com material na obra e eliminando custo com retrabalho.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Comunicação</h3><p class="pil__d">Retorno rápido em cada interação. Comunicação não é burocracia, é cultura.</p></div>
            </div>
            <div class="pil__i" data-reveal>
              <svg class="pil__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>
              <div><h3 class="pil__t">Prazo</h3><p class="pil__d">Cronograma realista e compromisso total com a data de entrega.</p></div>
            </div>
          </div>
        </div>
        <figure class="sobre__fig" data-reveal="fig">
          <img src="<?php echo esc_url( VECTRA_URI . '/assets/img/sobre.webp' ); ?>" alt="Recepção do escritório corporativo Duvale, entregue pela Vectra" loading="lazy" decoding="async" width="1500" height="1200">
        </figure>
      </div>
    </div>
  </section>

  <!-- ============ MARCAS ============ -->
  <section class="marcas" aria-labelledby="h-marcas">
    <div class="container marcas__h">
      <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>Marcas que confiam na entrega Vectra</p>
      <h2 id="h-marcas" class="sr">Marcas que confiam na entrega Vectra</h2>
    </div>
    <div class="mq" aria-hidden="true"><div class="mq__t"><span class="mq__i">Smart Fit<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bioritmo<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Vydea<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Festval<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Jockey Plaza<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Arena Brahma<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">A.Yoshii<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Thá Engenharia<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">GT Building<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bicalho<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Piemonte<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Laguna<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bruna Passaura<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Léo Cosméticos<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Duvale<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Smart Fit<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bioritmo<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Vydea<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Festval<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Jockey Plaza<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Arena Brahma<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">A.Yoshii<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Thá Engenharia<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">GT Building<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bicalho<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Piemonte<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Laguna<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Bruna Passaura<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Léo Cosméticos<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span><span class="mq__i">Duvale<svg class="" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg></span></div></div>
  </section>

  <!-- ============ 06 CONTATO ============ -->
  <section class="sec cta sec--dark" id="contato" aria-labelledby="h-contato">
    <div class="container">
      <div class="cta__grid">
        <div>
          <p class="eyebrow"><svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="<?php echo esc_url( ( is_front_page() ? '' : home_url( '/' ) ) . '#i-v' ); ?>"/></svg>06 . Contato</p>
          <h2 id="h-contato" data-split>Como solicitar seu orçamento.</h2>
          <div class="cta__act" data-reveal>
            <a class="btn btn--light" data-wa-btn="projetos de instalações ou obra turn key" href="#">Solicitar orçamento<svg class="btn__ar" viewBox="0 0 15 9" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M0 4.5h13.4M10 1l3.6 3.5L10 8"/></svg></a>
          </div>
          <div class="canais">
            <div class="canal" data-reveal>
              <span class="canal__k">Projetos</span>
              <span class="canal__v">Ketlyn Almeida
                <span class="canal__s"><a href="tel:+5541998292317">(41) 99829-2317</a> . <a href="mailto:ketlyn.almeida@vectraconstrucao.com">ketlyn.almeida@vectraconstrucao.com</a></span>
              </span>
            </div>
            <div class="canal" data-reveal>
              <span class="canal__k">Obras</span>
              <span class="canal__v">Larissa Mohr
                <span class="canal__s"><a href="tel:+5541988665477">(41) 98866-5477</a> . <a href="mailto:larissa.mohr@vectraconstrucao.com">larissa.mohr@vectraconstrucao.com</a></span>
              </span>
            </div>
            <div class="canal" data-reveal>
              <span class="canal__k">Endereço</span>
              <span class="canal__v">Rua Saldanha Marinho, 1753
                <span class="canal__s">Bigorrilho, Curitiba/PR</span>
              </span>
            </div>
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
</main>

<?php get_footer();
