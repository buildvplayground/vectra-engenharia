<?php
/**
 * Pagina nao encontrada.
 *
 * @package Vectra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="conteudo">
	<section class="sec doc">
		<div class="container">
			<div class="doc__h">
				<p class="eyebrow">
					<svg class="eyebrow__mk" viewBox="0 0 291.146 251.695" aria-hidden="true"><use href="#i-v"/></svg>
					<?php esc_html_e( 'Erro 404', 'vectra' ); ?>
				</p>
				<h1 class="doc__t" data-split><?php esc_html_e( 'Esta pagina nao existe.', 'vectra' ); ?></h1>
			</div>
			<div class="doc__b">
				<p><?php esc_html_e( 'O endereco pode ter mudado. Volte para a home ou fale com a nossa equipe.', 'vectra' ); ?></p>
				<p><a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Ir para a home', 'vectra' ); ?></a></p>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
