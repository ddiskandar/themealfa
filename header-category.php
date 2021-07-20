<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 bg-gray-50 antialiased'); ?>>

    <?php do_action('themealfa_site_before'); ?>

    <div id="page" class="flex flex-col min-h-screen">

        <?php do_action('themealfa_header'); ?>

        <header class="bg-white shadow-xl ">

            <div class="container mx-auto">
                <div class="py-6 lg:flex lg:justify-between lg:items-center">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-lg uppercase">
                                <a href="<?php echo esc_url(home_url()); ?>" class="text-lg font-extrabold uppercase">
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                            'menu_class'      => 'lg:flex lg:-mx-4 space-y-3 lg:space-y-0',
                            'theme_location'  => 'primary',
                            'li_class'        => 'lg:mx-6 font-bold',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
            </div>
        </header>

        <div class="shadow-lg bg-gradient-to-b bg-gray-50">
            <div class="container flex justify-center mx-auto mt-8 space-x-2 md:justify-start md:space-x-8 ">
                <a href="<?php echo esc_url(home_url()) ?>/berita/sekolah" class="px-4 md:px-8 pb-6 
                    <?php if (is_category('sekolah')) : ?> border-b-2 font-semibold text-secondary border-b-secondary <?php endif; ?>
                ">
                    <span class="hidden md:inline-block">Kegiatan</span> Sekolah
                </a>
                <a href="<?php echo esc_url(home_url()) ?>/berita/vokasi" class="px-4 md:px-8 pb-6 
                    <?php if (is_category('vokasi')) : ?> border-b-2 font-semibold text-secondary border-b-secondary <?php endif; ?>
                ">
                    <span class="hidden md:inline-block">Dirjen</span> Vokasi
                </a>
                <a href="<?php echo esc_url(home_url()) ?>/berita/pendidikan" class="px-4 md:px-8 pb-6 
                    <?php if (is_category('pendidikan')) : ?> border-b-2 font-semibold text-secondary border-b-secondary <?php endif; ?>
                ">
                    <span class="hidden md:inline-block">Berita</span> Pendidikan
                </a>
            </div>
        </div>

        <div class="mt-12">
            <div class="container flex justify-start px-4 mx-auto md:px-0">
                <h3 class="text-3xl font-bold">Berita <?php single_cat_title(); ?></h3>
            </div>
        </div>

        <div id="content" class="flex-grow site-content">

            <?php do_action('themealfa_content_start'); ?>

            <main>