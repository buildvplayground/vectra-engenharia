<?php
/**
 * Fallback obrigatorio do tema (arquivos, busca, blog).
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
				<h1 class="doc__t" data-split><?php
					if ( is_search() ) {
						printf( esc_html__( 'Busca: %s', 'vectra' ), esc_html( get_search_query() ) );
					} elseif ( is_archive() ) {
						the_archive_title();
					} else {
						esc_html_e( 'Publicacoes', 'vectra' );
					}
				?></h1>
			</div>
			<div class="doc__b">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="gp__r" data-reveal>
						<a class="gp__n" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<span class="gp__i"><?php echo esc_html( get_the_date() ); ?></span>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Nada encontrado.', 'vectra' ); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
