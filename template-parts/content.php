<?php
/**
 * A post card used in archive views.
 *
 * @package HaberMagazin
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<a class="post-thumbnail" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'large' ); ?>
			<span class="screen-reader-text"><?php the_title(); ?></span>
		</a>
	<?php endif; ?>
	<header class="entry-header">
		<?php the_category( ', ' ); ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="entry-meta">
			<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
		</p>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Devamını oku', 'haber-magazin' ); ?><span class="screen-reader-text">: <?php the_title(); ?></span></a></p>
	</div>
</article>
