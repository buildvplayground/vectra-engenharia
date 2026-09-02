<?php
/**
 * Pagina interna (Politica de Privacidade, Fornecedores, etc.).
 *
 * @package Vectra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="conteudo">
	<article class="sec doc">
		<div class="container">
			<div class="doc__h">
				<p class="eyebrow">
					<svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="#i-v"/></svg>
					<?php echo esc_html( get_post_meta( get_the_ID(), 'vectra_eyebrow', true ) ?: get_bloginfo( 'name' ) ); ?>
				</p>
				<h1 class="doc__t" data-split><?php the_title(); ?></h1>
			</div>
			<div class="doc__b">
				<?php
				the_content();

				if ( get_the_modified_date() ) {
					printf(
						'<p class="doc__up">%s %s</p>',
						esc_html__( 'Ultima atualizacao:', 'vectra' ),
						esc_html( get_the_modified_date( 'F \d\e Y' ) )
					);
				}
				?>
			</div>
		</div>
	</article>
</main>
<?php
get_footer();
