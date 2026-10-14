<?php
/**
 * Page template.
 *
 * @package HaberMagazin
 */

get_header();
?>
<main id="main-content" class="content-area">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="page-content">
				<?php
				the_content();
				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Sayfa bölümleri', 'haber-magazin' ) . '">' . esc_html__( 'Sayfalar:', 'haber-magazin' ),
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
	<?php endwhile; ?>
</main>
<?php
get_footer();
