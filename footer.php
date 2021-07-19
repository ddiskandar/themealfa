
</main>

<?php do_action( 'themealfa_content_end' ); ?>

</div>

<?php do_action( 'themealfa_content_after' ); ?>

<footer id="colophon" class="py-12 bg-primary site-footer" role="contentinfo">
	<?php do_action( 'themealfa_footer' ); ?>

	<div class="container mx-auto text-center text-white">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>. Made with love by Dd.
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
