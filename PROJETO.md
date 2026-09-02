# Vectra Engenharia e Construções — site

**Cliente:** Vectra Engenharia e Construções (Curitiba/PR, desde 1997)
**Negócio:** projetos de instalações complementares em BIM + obra turn key
**Slug:** `vectra-engenharia` · **Repo:** `dev-buildv/vectra-engenharia-site` (privado)
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
- [x] **4. Copy** — `done` → `Copys/copy-site.md`
      **Ramo B** (sem copy oficial): copy derivada dos 3 decks institucionais reais.
      Nenhum número ou nome inventado. Sem travessão, por restrição do cliente.
- [x] **5. Front-end** — `done` → `Site/` (+ auditoria `revisar-frontend`, 6 achados corrigidos)
- [x] **6. Ajustes finais** — `done` (imagens webp, responsividade medida, preview local)
- [x] **7. Tags e módulos** — `parcial`
      LGPD instalado (banner + Política de Privacidade + Fornecedores/Trabalhe Conosco,
      consentimento emitindo `dataLayer`). **GTM/GA4/Pixel/Merlin: pulados**, faltam os IDs.
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
| Navbar | **papel sólido desde o topo**, índice numerado 01-06, filete que cresce | transparente→sólido, duas faixas, troca de logo, topo escuro |
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
jornada travada → **faixa de imagem** → grade de obras → lista tipográfica →
**faixa de imagem** → split imagem+texto → marquee → CTA → footer.

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
| `_work/audit.py` | overflow horizontal **0** em 22 larguras × 3 páginas (320→1920px); menu, lightbox, reveals, pin e console sem achados |
| `_work/audit_wcag.py` | contraste, hierarquia de heading, `alt`, nome acessível, alvo de toque, `<strong>` em texto muted, `rel=noopener`, `prefers-reduced-motion`: **sem achados** |
| `_work/audit_buildv.py` | **29/29** requisitos BuildV obrigatórios |
| `deploy-vercel/` | mesma bateria de responsividade: **sem achados** |
| PHP do tema | `php -l` limpo nos 7 arquivos |

Imagens: **384,4 MB → 16,8 MB** em `.webp` (95,6% menor), com deduplicação perceptual
(descarta quadros quase idênticos; ex.: Vydea 114 → 9 fotos).

---

## Pendências do usuário

Ver o bloco `pendencias` em `state.json`. Resumo: WhatsApp a confirmar, IDs de
GTM/GA4/Pixel/Merlin, domínio, importar no Vercel, autorização de logo de cliente,
cidade de duas obras, e conferir a divergência de hex do azul da marca.
