<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="mb-4 entry-header">
		<?php the_title(sprintf('<h1 class="mb-2 text-2xl font-extrabold leading-tight entry-title lg:text-5xl"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
		<div class="mt-4">
			<?php the_post_thumbnail('large') ?>
		</div>
		<div class="mt-4">
			<?php the_category() ?>
		</div>
		<div class="mt-4">
			<?php the_tags('') ?>
		</div>
		<div class="mt-4">
			<?php next_post_link() ?>
		</div>
		<div class="mt-4">
			<?php previous_post_link() ?>
		</div>
		<div class="mt-4">
			<?php the_shortlink() ?>
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>

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