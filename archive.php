<?php
/**
 * Archive template.
 *
 * @package HaberMagazin
 */

get_header();
?>
<main id="main-content" class="content-area">
	<header class="page-heading">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description( '<div class="page-description">', '</div>' ); ?>
	</header>
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
				'screen_reader_text' => __( 'Arşiv sayfaları', 'haber-magazin' ),
			)
		);
		?>
	<?php else : ?>
		<p><?php esc_html_e( 'Bu arşivde henüz içerik yok.', 'haber-magazin' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
