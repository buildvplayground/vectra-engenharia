# deploy-wordpress — Vectra Engenharia

Tema classico sob medida (`vectra-engenharia/`), com o mesmo design, os mesmos
assets e o mesmo motor de movimento do site estatico.

## Instalar

1. Compacte a pasta `vectra-engenharia/` num `.zip`.
2. No WP: **Aparencia > Temas > Adicionar novo > Enviar tema** e ative.
3. **Configuracoes > Leitura**: "Sua pagina inicial exibe" = **Uma pagina estatica**
   e escolha uma pagina vazia chamada `Home`. O tema usa `front-page.php`, que
   ignora o conteudo dessa pagina e renderiza a home completa.
4. Crie duas paginas e cole o conteudo de `conteudo-inicial/` (editor de codigo):
   - **Politica de Privacidade** (slug `politica-de-privacidade`)
   - **Fornecedores e Trabalhe Conosco** (slug `fornecedores`)
5. **Aparencia > Personalizar > Contato Vectra**: confirme WhatsApp, telefones e endereco.

## Observacoes

- Os links do rodape apontam para `politica-de-privacidade.html` e
  `fornecedores.html` (heranca do estatico). No WP, ajuste-os para os
  permalinks reais (`/politica-de-privacidade/` e `/fornecedores/`) ou crie um
  menu em **Aparencia > Menus > Menu do rodape**.
- O tema nao inclui formulario: o CTA e botao de WhatsApp, como manda o padrao BuildV.
- Requer PHP 7.4+ e WordPress 6.0+.
