<?php
/**
 * Single post template.
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
				<?php the_category( ', ' ); ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<p class="entry-meta">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
					<?php esc_html_e( 'Yazan', 'haber-magazin' ); ?> <?php the_author_posts_link(); ?>
				</p>
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
			</header>
			<div class="entry-content">
				<?php
				the_content();
				wp_link_pages(
					array(
						'before' => '<nav class="page-links" aria-label="' . esc_attr__( 'Yazı sayfaları', 'haber-magazin' ) . '">' . esc_html__( 'Sayfalar:', 'haber-magazin' ),
						'after'  => '</nav>',
					)
				);
				?>
			</div>
		</article>
		<?php
		the_post_navigation(
			array(
				'prev_text' => '<span class="screen-reader-text">' . esc_html__( 'Önceki yazı:', 'haber-magazin' ) . '</span> %title',
				'next_text' => '<span class="screen-reader-text">' . esc_html__( 'Sonraki yazı:', 'haber-magazin' ) . '</span> %title',
			)
		);
	endwhile;
	?>
</main>
<?php
get_footer();
