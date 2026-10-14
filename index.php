<?php
/**
 * Main template.
 *
 * @package HaberMagazin
 */

get_header();
?>
<main id="main-content" class="content-area">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-heading">
			<h1><?php single_post_title(); ?></h1>
		</header>
	<?php endif; ?>
	<?php if ( have_posts() ) : ?>
		<div class="post-grid">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
		</div>
		<?php
		the_posts_pagination(
			array(
				'mid_size'           => 1,
				'prev_text'          => __( 'Önceki', 'haber-magazin' ),
				'next_text'          => __( 'Sonraki', 'haber-magazin' ),
				'screen_reader_text' => __( 'Yazı sayfaları', 'haber-magazin' ),
			)
		);
		?>
	<?php else : ?>
		<section class="no-results">
			<h1><?php esc_html_e( 'Henüz içerik yok', 'haber-magazin' ); ?></h1>
			<p><?php esc_html_e( 'Burada gösterilecek bir yazı bulunamadı.', 'haber-magazin' ); ?></p>
		</section>
	<?php endif; ?>
</main>
<?php
get_footer();
