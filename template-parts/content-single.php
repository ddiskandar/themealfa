<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="mb-4 entry-header">
		<?php the_title(sprintf('<h1 class="mb-0 text-2xl font-extrabold leading-tight sm:mb-2 entry-title lg:text-5xl"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<div class="flex items-center py-4 text-sm text-gray-700 md:text-base">
			<div class="mr-1">
				Diterbitkan <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> pada Berita
			</div>
			<?php the_category() ?>
		</div>
		<div class="">
			<?php the_post_thumbnail('large', [
				'class' => 'rounded-md md:rounded-none'
			]) ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

		<!-- TODO : Share link here -->

		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'themealfa') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'themealfa') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>