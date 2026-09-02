# deploy-vercel — Vectra Engenharia

Site estatico (HTML + CSS + JS vanilla). **Nao e projeto Next.js.**

## Publicar

1. Importar o repositorio `dev-buildv/vectra-engenharia-site` no Vercel.
2. **Root Directory: `deploy-vercel`**
3. **Framework Preset: Other** (nao selecionar Next.js).
4. Build Command: vazio. Output Directory: vazio.

Ou, pela CLI, dentro desta pasta: `vercel --prod`

## Depois de publicar

- Apontar o dominio (`vectraconstrucao.com`) nas configuracoes do projeto.
- Trocar as URLs de `sitemap.xml`, `robots.txt` e da tag `<link rel="canonical">`
  se o dominio final for diferente.
