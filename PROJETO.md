# Vectra Engenharia e Construções — site

**Cliente:** Vectra Engenharia e Construções (Curitiba/PR, desde 1997)
**Negócio:** projetos de instalações complementares em BIM + obra turn key
**Slug:** `vectra-engenharia` · **Repo:** `dev-buildv/vectra-engenharia`
**Site atual:** https://vectraconstrucoes.com/
**Drive:** `1_goFn61f2bXh3ow5COE7qgCC-6P4yVwo`
**Atualizado:** 2026-09-02

---

## Progresso das etapas

- [x] **1. Extrair do Drive** — `done`
      Marca completa (Ai/PDF/PNG + manual + malha gráfica), 3 decks institucionais
      (Construtoras, Varejo, Fitness turn key), 411 fotos em 21 pastas de obra.
      As subpastas `03.01. Site (Copy + Backup Site Antigo)` e `03.02. Revisões e Criações`
      estavam **vazias** no Drive: não havia doc de copy nem backup de site antigo.
- [x] **2. Organizar pastas** — `done` (`Marca/`, `Copys/`, `imagens/`, `_raw/`, `_work/`)
- [x] **2b. Repo GitHub** — `done`
- [x] **3. Design system** — `done` → `design-system/design-system.md`
      Paleta e tipografia derivadas do manual real. **Sem** `direcao-estilo.md`:
      o plugin `ui-ux-pro-max` não foi consultado para paleta/tipografia (elas vêm da
      marca, por regra), e o arquivo de direção da etapa 3 não existe neste projeto.
- [x] **4. Copy** — `done` → `Copys/copy-site.md` (+ adendo do site atual)
      **Ramo B** (sem doc de copy oficial): copy derivada dos 3 decks institucionais e,
      numa segunda passada, do **site atual do cliente** (vectraconstrucoes.com), que ele
      indicou depois. Nenhum número ou nome inventado. Sem travessão, por restrição.
- [x] **5. Front-end** — `done` → `Site/` (+ auditoria `revisar-frontend`, 7 achados corrigidos)
      14 seções, incluindo a de **vídeos** e a de **escopo de obra**, vindas do material novo.
- [x] **6. Ajustes finais** — `done` (imagens webp, responsividade medida, preview local)
- [x] **7. Tags e módulos** — `parcial`
      LGPD instalado (banner + Política de Privacidade + Fornecedores/Trabalhe Conosco,
      consentimento emitindo `dataLayer`). **GTM/GA4/Pixel/Merlin: pulados**, faltam os IDs.
- [x] **Segunda passada (02/09, a pedido do cliente):** consumido o site atual
      (vectraconstrucoes.com) para copy e incorporados os **2 vídeos** de
      `imagens/vídeos/`, **sem áudio**.
- [ ] **8. Revisão humana** — `pending` (gate do usuário)
- [ ] **9. Deploy em produção** — `blocked` (falta importar no Vercel / instalar o tema)

---

## Decisões de design registradas

**Metáfora de composição: prancha técnica.** Moldura desenhada, marcas de canto e
selo/legenda (title block) no hero. É a linguagem do próprio ofício da Vectra
(projeto de instalações), e nenhum dos cinco projetos de engenharia anteriores da casa usou.

**Eixos de variação vs. o ledger do setor** (Confianto, Arkeon, LSE, POLC, Canun, Alpha Concept):

| Eixo | Vectra | O que evitou |
|---|---|---|
| Uso de cor | **papel `#f1f1f1` dominante**, navy como tinta | os 5 anteriores foram navy-escuro dominante |
| Acento | **nenhum** (a marca não tem) | dourado, verde, âmbar |
| Hero | foto full-bleed + **moldura de prancha que desenha** + selo técnico | slab sobreposto, dossiê lateral, véu lateral, composição tipográfica |
| Navbar | **papel sólido desde o topo**, índice numerado 01-07, filete que cresce | transparente→sólido, duas faixas, troca de logo, topo escuro |
| Movimento | **cena travada HORIZONTAL** (pin + scrub) na jornada | ninguém do setor usou pin horizontal |
| Disciplinas | **índice técnico com filetes** (sem card) | grid de 3 cards, tablist, bento |
| CTA | 3 passos como **linhas de legenda de prancha** + filete que desenha | stepper horizontal, escada, faixa verde |
| Card de obra | **corte de 45° no canto** (a lâmina do símbolo) | chanfro, rampa de ápice, filete dourado |

**Forma-assinatura:** a geometria do próprio símbolo (calha arredondada + lâmina a 45°),
aplicada como marcador de rótulo (SVG inline, **nunca `::before`** — restrição do cliente),
corte de canto nos cards, bullet das listas e a **malha oficial da marca** como textura.

**Tipografia:** Archivo (300/500/700) + IBM Plex Sans + IBM Plex Mono. Salto de peso
300→700. Não é Inter nem system-ui.

**Ritmo de seções** (nenhuma adjacente do mesmo tipo, imagem a cada 2-3 seções):
hero foto → faixa de números → split editorial → **faixa de imagem** → índice técnico →
jornada travada → **split foto + escopo de obra** → grade de obras → lista tipográfica →
**faixa de imagem** → **grade de vídeo** → split imagem+texto → marquee → CTA → footer.
Nenhuma seção adjacente repete o tipo; há imagem ou vídeo a cada 1 ou 2 seções.

---

## Achados corrigidos na auditoria (etapa 5)

1. **Especificidade invertida no reveal** (bloqueante). A cadeia
   `:not([data-reveal="soft"]):not(...)` somava especificidade e **vencia** a regra
   `[data-on]`: os blocos apareciam mas ficavam presos em `blur(5px)` e `translateY(24px)`
   para sempre. Reescrito com seletores de valor explícito.
2. **`clip-path` em caixa inline** (bloqueante). `.pf__fig`/`.pf__body` são `<span>` dentro
   de `<button>` e ficaram `display:inline`: `aspect-ratio` não se aplicava e o recorte
   apagava a imagem inteira do card. Corrigido com `display:block`.
3. **Dois CTAs no header** (bloqueante). O botão da gaveta mobile também renderizava no
   desktop: 1213px de conteúdo em 1152px úteis, com overflow horizontal em ≤1213px.
   `.nav__cta` agora só existe ≤900px.
4. **Contraste do numeral do menu** (bloqueante, WCAG AA). O cinza da marca `#adabab`
   dá **2.02:1** sobre o papel. Trocado por `--muted` (6.24:1). O cinza da marca ficou
   restrito a filete e a rótulo sobre fundo escuro.
5. **Jornada e CTA sem herdar o tema escuro** (bloqueante, WCAG AA). As seções `.jor` e
   `.cta` não tinham `.sec--dark`, então eyebrow e lede ficaram `--muted` sobre navy:
   **2.03:1**. Resolvido.
6. **Reveal horizontal criando overflow no mobile** (bloqueante). O `translateX(±26px)`
   de repouso empurrava as colunas empilhadas 26px para fora do container (8px de overflow
   de 415px a 560px). Restrito a ≥900px.

Extra: `src=""` no `<img>` do lightbox (o navegador baixa o próprio HTML como imagem)
e estilos inline movidos para classes.

**Nota de preview, não do site:** `python -m http.server` entrega `.webp` como
`application/octet-stream` (armadilha nº 7 do catálogo). Use `_work/preview.py`, que
registra o MIME. Sem isso, "a imagem não aparece" parece bug do site.

---

## Verificação (por medição, não por screenshot)

| Auditoria | Resultado |
|---|---|
| `_work/audit.py` | overflow horizontal **0** em **28 larguras × 4 páginas** (112 combinações, 320→1920px); menu, lightbox, reveals, pin, scrub e console sem achados |
| `_work/audit_contraste_midia.py` | contraste **medido em pixel** de 28 blocos de texto sobre foto/vídeo: todos ≥ AA |
| `_work/audit_wcag20_nielsen.py` | WCAG 2.0 A/AA critério por critério + heurísticas de Nielsen: sem achados |
| `_work/audit_wcag.py` | contraste, hierarquia de heading, `alt`, nome acessível, alvo de toque, `<strong>` em texto muted, `rel=noopener`, `prefers-reduced-motion`: **sem achados** |
| `_work/audit_buildv.py` | **29/29** requisitos BuildV obrigatórios |
| `deploy-vercel/` | mesma bateria de responsividade: **sem achados** |
| PHP do tema | `php -l` limpo nos 7 arquivos |

Imagens: **384,4 MB → 16,8 MB** em `.webp` (95,6% menor), com deduplicação perceptual
(descarta quadros quase idênticos; ex.: Vydea 114 → 9 fotos).
Vídeos: **639 MB → 6,9 MB**, com **0 streams de áudio** (verificado com `ffprobe`).

---

## Segunda passada: site atual + vídeos (02/09/2026)

### O que veio do site atual (vectraconstrucoes.com)
Fatos que o material do Drive não tinha e que entraram no site:

| Novo | Onde entrou |
|---|---|
| **BIM desde 2015** (data concreta) | selo do hero, Frente A, pilar Inovação |
| **Propósito:** "ser agentes de evolução nas cidades onde atuamos" | bloco institucional |
| **Tagline:** "excelência em cada detalhe" | pilar Excelência |
| **Cobertura precisa:** projetos em todo o Brasil, construtora no Sul e em SP | selo do hero e as duas frentes |
| **Os 4 pilares oficiais** (Excelência, Compromisso, Inovação, Transparência) | substituíram os que eu havia derivado do deck |
| **Escopo de execução de obra**, 10 itens | **seção nova** "Construção civil, solução completa para a sua obra" |
| **propostas@vectraconstrucao.com** e CEP 80730-180 | contato e footer |
| 6 obras que o Drive não citava | barra de marcas (em texto) |
| **Domínio confirmado:** vectraconstrucoes.com | canonical, sitemap, robots, JSON-LD |

> Atenção: o site é **vectraconstrucoes.com** (com S) e os e-mails são
> **@vectraconstrucao.com** (sem S). São dois domínios e ambos estão em uso.

### Os vídeos, sem áudio

Os dois arquivos de `imagens/vídeos/` são **peças institucionais produzidas**, em 4K, com
**legenda queimada e marca d'água da Vectra**. Isso decidiu o tratamento:

- **O áudio foi removido do arquivo**, não silenciado por atributo:
  `ffmpeg -an` descarta a trilha inteira. Conferido: `ffprobe` reporta **0 streams de
  áudio** nos dois. Não existe áudio para tocar, em nenhum navegador.
- **Não viraram textura de fundo atrás de texto.** A legenda queimada e a marca d'água
  brigariam com qualquer texto sobreposto, e a legenda carrega a narração (é o que faz a
  peça funcionar muda). Então ganharam **seção própria** (`05 . Vídeos`), onde o vídeo é o
  conteúdo, não o pano de fundo.
- **Play sob demanda:** `preload="none"` (zero byte de vídeo antes do clique, medido),
  pôster em `.webp`, e os controles nativos aparecem no primeiro play. Como nada toca
  sozinho, o critério WCAG 2.2.2 (pausar/parar) fica satisfeito por construção.
- **Pôster escolhido por medição:** um script varre o vídeo de 2 em 2 segundos e escolhe o
  quadro **sem legenda na tela** com melhor nitidez e brilho, para o estado estático não
  exibir frase cortada no meio (`_work/pick_poster.py`).
- **Peso:** 639 MB de origem → **23,5 MB** (1280×720, 24fps, H.264, CRF 28). Só MP4:
  H.264 cobre todos os navegadores relevantes, o VP9/WebM seria peso e tempo sem ganho.

**O design system não mudou.** A seção reusa os tokens que já existiam: o corte de 45° do
card de obra na moldura do vídeo, o mesmo corte no botão de play, e a legenda usa as
classes do card (`.pf__seg`, `.pf__t`, `.pf__m`).

### Achado nº 7 (desta passada)
**Overflow de 5px em 1120px.** O sétimo item de menu ("05 Vídeos") levou o nav de 629px
para 689px; somado ao logo e ao CTA, o header passou a pedir 1125px onde havia 1120.
O CTA do header agora sai abaixo de **1180px** (era 1080px). Reauditado em 28 larguras,
incluindo 1180 e 1181 de propósito, para cobrir a borda.

---

## Terceira passada: vídeo travado no scroll + Jornada (02/09/2026)

### As faixas de vídeo, quadro a quadro

Full width, a cena **trava** e a imagem avança ou volta conforme a rolagem.
São **duas faixas distribuídas na página** (seções 7 e 10 de 14, com três seções entre
elas), não uma seção com os dois vídeos empilhados. Por isso saíram do menu: viraram
quebra editorial, não destino, e a numeração voltou a 01-06.

- **Trecho, não a peça inteira.** As peças têm 75s; as cenas usam **5,95s** (Arena Brahma)
  e **4,35s** (Bioritmo), com a rolagem esticada para **2,8 telas** por faixa, o que faz o
  quadro andar mais devagar e a cena durar mais.
- **O material limita o comprimento.** Medindo os cortes do original, a janela limpa mais
  longa do Bioritmo tem 4,3s (corte em 45,8s e em 50,4s). No Arena deu 5,95s (corte em
  64,4s e o selo VECTRA entrando em 70,8s). Passar disso exigiria material com tomadas
  contínuas mais longas. Os trechos foram escolhidos por medição
  (`_work/pick_trecho2.py`): sem corte de cena, com movimento de câmera contínuo e
  brilho utilizável. Os dois primeiros candidatos foram descartados a olho, porque
  tinham a apresentadora falando para a câmera, o que não se sustenta sem áudio.
- **Recorte 2,4:1 resolve legenda e marca d'água.** As peças são narradas e têm legenda
  queimada quase do início ao fim, além da marca d'água no topo. Recortando uma faixa
  cinematográfica do meio do quadro (`crop=3474:1404:183:259`), os dois desaparecem e
  qualquer trecho passa a ser usável. Foi o que destravou a escolha.
- **All-intra é o que faz o scrub não engasgar.** Codificado com `-g 1`: todo quadro é
  keyframe, então `currentTime` cai no quadro exato sem decodificar um GOP inteiro.
  1920×776, 20 fps, `-an`.
- **Peso caiu.** 639 MB de origem → **6,9 MB** (era 23,5 MB com as peças inteiras).
- **Bug do fim da cena, corrigido.** Ao chegar em `duration` o navegador dispara `ended`,
  e o handler do play manual resetava `currentTime = 0`: o último quadro pulava para o
  primeiro justamente no fim da rolagem. Agora o reset só vale para play manual, e o
  scrub para um quadro antes do fim, para o `ended` nem disparar.
- **Touch e reduced-motion não travam nada:** `data-pin="off"`, e fica o pôster com
  botão de play. A proporção muda para 16/11 em tela estreita, senão a faixa 2,47:1
  viraria um filete de 158px.
- **Pôster sem legenda**, escolhido por varredura (`_work/pick_poster.py`).

### A Jornada

Estava navy chapado e com um bloco flutuando no meio da viewport travada. Agora:
- **Três camadas de profundidade:** foto real (corredor de cabine primária do Jockey,
  com perspectiva de um ponto, que conversa com a ideia de jornada) + degradê navy em
  duas direções + a **malha oficial da marca** a 7%.
- **Ritmo mais curto:** cabeça de `--sp-sec-lg` para `--sp-sec-md`, passo de 30/44px
  para 22/32px, rodapé encurtado.
- **A altura passou a ser preenchida:** o numeral vai para o topo (`margin-bottom:auto`)
  e o texto encosta na base, em vez de tudo centralizado com vazio em volta.

---

## Revisão WCAG 2.0 (A/AA) e heurísticas de Nielsen

Rodada com `_work/audit_wcag20_nielsen.py` (critério por critério) e
`_work/audit_contraste_midia.py`. **Sem achados mecânicos** ao final. O que foi
corrigido nesta rodada:

| Critério | Achado | Correção |
|---|---|---|
| **1.4.3 (AA)** | O metadado das faixas dava **3,63:1** e **4,22:1** medido **sobre a foto** (o checador de DOM passava, porque resolvia o fundo pela cor da seção) | Degradê da faixa reforçado e texto de `#adabab` para `#dfe3e7` |
| **1.4.4 (AA)** | A 200% da fonte padrão o header pedia 1500px de nav e jogava itens do menu fora da tela | Breakpoints de `px` para **`em`** (respondem ao zoom de texto) + trava por medição no header |
| **2.2.2 (A)** | A faixa de marcas rodava infinitamente e o `:hover` não serve para teclado | Botão real de **pausar/retomar**, com `aria-pressed` |
| **1.1.1 / 1.3.1 (A)** | Os nomes de cliente existiam só no marquee, que é `aria-hidden`: leitor de tela não recebia nada | Lista `<ul>` real, visualmente oculta, com os nomes |
| **4.1.2 (A)** | `aria-controls="menu"` apontava para um id que não existia | `id="menu"` no `<nav>` |
| **Nielsen 9** | O deploy estático não tinha página de erro (só o tema WordPress tinha) | `404.html`, com as rotas principais e os telefones |

Verificações que passaram sem correção: 1.1.1, 1.2.1 (vídeo sem áudio com alternativa em
texto), 1.3.1, 1.3.2, 1.4.1, 2.1.1, 2.1.2, 2.4.1, 2.4.2, 2.4.3, 2.4.5, 2.4.6, 2.4.7,
3.1.1, 3.2.x, 4.1.1. **18 paradas de Tab, todas com nome acessível e foco visível.**

**Notas de julgamento** (não são achados, ficam registradas):
- **3.1.2 (AA), idioma de partes:** "turn key" e "BIM" ficaram sem `lang="en"`. São jargão
  naturalizado no setor de construção no Brasil e aparecem como termo técnico, não como
  citação em outra língua.
- **1.2.1:** os vídeos são *video-only* sem áudio. A alternativa em texto é o `aria-label`
  de cada um, mais o nome, cidade, metragem e papel na legenda visível, mais a introdução
  da seção. Não há narração para transcrever, porque o áudio foi removido do arquivo.
- **2.2.2 e a cena de scroll:** a faixa de vídeo não toca sozinha em nenhum cenário, então
  não há o que pausar. O movimento é 100% conduzido pela rolagem do usuário.

### Nielsen, as dez heurísticas

1. **Visibilidade do estado:** barra de leitura, régua da cena travada, régua do vídeo,
   scroll-spy no menu, contador do lightbox.
2. **Linguagem do usuário:** "disciplinas", "compatibilização", "obra turn key", "prancha".
   É o vocabulário dos próprios decks do cliente.
3. **Controle e liberdade:** nada toca sozinho, o scrub é reversível, lightbox sai no `Esc`,
   a faixa de marcas tem pausa, o menu fecha no `Esc` e no véu.
4. **Consistência:** o mesmo marcador da marca, o mesmo corte de 45°, o mesmo padrão de
   legenda no card de obra e na faixa de vídeo.
5. **Prevenção de erro:** sem formulário, WhatsApp com texto pré-preenchido, `rel=noopener`
   em todo link externo.
6. **Reconhecer em vez de lembrar:** menu numerado 01 a 07 com scroll-spy.
7. **Flexibilidade:** âncoras, link de pular para o conteúdo, teclado no lightbox.
8. **Estética e minimalismo:** paleta de quatro valores da marca, sem acento inventado.
9. **Recuperação de erro:** `404.html` e `404.php` com rotas e telefones.
10. **Ajuda:** os três passos de "como solicitar seu orçamento".

---

## Pendências do usuário

Ver o bloco `pendencias` em `state.json`. Resumo: WhatsApp a confirmar, IDs de
GTM/GA4/Pixel/Merlin, domínio, importar no Vercel, autorização de logo de cliente,
cidade de duas obras, e conferir a divergência de hex do azul da marca.
