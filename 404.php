<?php
/**
 * Not-found template.
 *
 * @package HaberMagazin
 */

get_header();
?>
<main id="main-content" class="content-area">
	<section class="no-results">
		<h1><?php esc_html_e( 'Sayfa bulunamadı', 'haber-magazin' ); ?></h1>
		<p><?php esc_html_e( 'Aradığınız sayfa kaldırılmış veya adresi değişmiş olabilir.', 'haber-magazin' ); ?></p>
		<?php get_search_form(); ?>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Ana sayfaya dön', 'haber-magazin' ); ?></a></p>
	</section>
</main>
<?php
get_footer();
