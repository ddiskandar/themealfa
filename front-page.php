<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script src="//unpkg.com/alpinejs" defer></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 bg-gray-50 antialiased'); ?>>

    <?php do_action('themealfa_site_before'); ?>

    <div id="page" class="flex flex-col min-h-screen">

        <?php do_action('themealfa_header'); ?>

        <header class="bg-primary">

            <div class="container mx-auto">
                <div class="py-6 lg:flex lg:justify-between lg:items-center">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-lg uppercase">
                                <a href="<?php echo esc_url(home_url()); ?>" class="text-lg font-extrabold text-white uppercase">
                                    <?php echo get_bloginfo('name'); ?>
                                </a>
                            </div>
                        </div>

                        <div class="lg:hidden">
                            <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                                <!-- <svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg> -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary-menu',
                            'container_class' => 'hidden bg-gray-100 rounded-lg mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
                            'menu_class'      => 'lg:flex lg:-mx-4 space-y-3 lg:space-y-0 lg:text-white',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-6 font-bold',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </header>

        <div id="content" class="flex-grow site-content">

            <?php get_template_part('partials/hero') ?>
            <?php get_template_part('partials/profil-jurusan') ?>
            <?php get_template_part('partials/dapodik') ?>
            <?php get_template_part('partials/ptk') ?>
            <?php get_template_part('partials/berita') ?>
            <?php get_template_part('partials/gallery') ?>
            <?php get_template_part('partials/youtube') ?>

        </div>

        <?php get_template_part('partials/banner') ?>

        <?php do_action('themealfa_content_start'); ?>

        <main>
            <?php
            get_footer();
