<?php
/**
 * The footer for the theme.
 *
 * @package HaberMagazin
 */
?>
<footer class="site-footer">
	<div class="footer-inner">
		<p><?php echo esc_html( get_bloginfo( 'name' ) ); ?> &copy; <?php echo esc_html( wp_date( 'Y' ) ); ?></p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
