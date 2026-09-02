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
| `_work/audit.py` | overflow horizontal **0** em **28 larguras × 3 páginas** (84 combinações, 320→1920px); menu, lightbox, reveals, pin, vídeos e console sem achados |
| `_work/audit_wcag.py` | contraste, hierarquia de heading, `alt`, nome acessível, alvo de toque, `<strong>` em texto muted, `rel=noopener`, `prefers-reduced-motion`: **sem achados** |
| `_work/audit_buildv.py` | **29/29** requisitos BuildV obrigatórios |
| `deploy-vercel/` | mesma bateria de responsividade: **sem achados** |
| PHP do tema | `php -l` limpo nos 7 arquivos |

Imagens: **384,4 MB → 16,8 MB** em `.webp` (95,6% menor), com deduplicação perceptual
(descarta quadros quase idênticos; ex.: Vydea 114 → 9 fotos).
Vídeos: **639 MB → 23,5 MB**, com **0 streams de áudio** (verificado com `ffprobe`).

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

## Pendências do usuário

Ver o bloco `pendencias` em `state.json`. Resumo: WhatsApp a confirmar, IDs de
GTM/GA4/Pixel/Merlin, domínio, importar no Vercel, autorização de logo de cliente,
cidade de duas obras, e conferir a divergência de hex do azul da marca.
