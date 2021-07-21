<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3.2.1/dist/cdn.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 bg-gray-100 antialiased'); ?>>

    <?php do_action('themealfa_site_before'); ?>

    <div id="page" class="flex flex-col min-h-screen">

        <?php do_action('themealfa_header'); ?>

        <!-- Hero Section: Image Cover With Header Actions Dark -->
        <div class="bg-bottom bg-cover" style="background-image: url('https://smkplusalfarhan.sch.id/wp-content/uploads/2021/01/hero-bg.jpg');">
            <div class="bg-gray-800 bg-opacity-80 backdrop-filter backdrop-blur-sm">
                <!-- Header -->
                <header id="page-header" class="flex items-center flex-none py-10">
                    <div class="container flex flex-col px-4 mx-auto space-y-6 text-center md:flex-row md:items-center md:justify-between md:space-y-0 xl:max-w-7xl lg:px-8">
                        <div>
                            <a href="<?php echo esc_url(home_url()); ?>" class="inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-white hover:opacity-75">
                                <span><?php echo get_bloginfo('name'); ?></span>
                            </a>
                        </div>

                        <?php
                        wp_nav_menu(
                            array(
                                'container_id'    => 'primary-menu',
                                'container_class' => '',
                                'menu_class'      => 'space-x-4 md:space-x-6 flex justify-center flex-wrap',
                                'theme_location'  => 'primary',
                                'li_class'        => 'font-semibold text-gray-300 hover:text-gray-400',
                                'fallback_cb'     => false,
                            )
                        );
                        ?>

                    </div>
                </header>
                <!-- END Header -->

                <!-- Hero Content -->
                <div class="container px-4 py-16 mx-auto text-center text-white xl:max-w-7xl lg:px-8 lg:py-32">
                    <div class="text-xl font-bold uppercase">
                        Bersama Kami
                    </div>
                    <h2 class="mb-4 text-4xl font-extrabold md:text-4xl">
                        Raih Masa Depan Anda
                    </h2>
                    <h3 class="mx-auto text-lg font-medium text-gray-400 md:text-xl md:leading-relaxed lg:w-2/3">
                        Mewujudkan SMK Plus Al-Farhan yang berakhlakul karimah, mandiri, profesional, berprestasi dan berbudaya lingkungan.
                    </h3>
                    <div class="flex justify-center mt-8 mb-12 ">
                        <a href="https://www.youtube.com/watch?v=JqSyQTC1XWk" rel="noopener" target="_blank" class="flex items-center my-4 font-semibold focus:outline-none" onclick="toggleProfil('video-profil')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.467 39" class="w-8 mr-4">
                                <path id="youtube-brands" d="M69.241,70.1a6.969,6.969,0,0,0-4.9-4.936C60.011,64,42.666,64,42.666,64S25.322,64,21,65.167a6.97,6.97,0,0,0-4.9,4.936c-1.159,4.354-1.159,13.437-1.159,13.437s0,9.084,1.159,13.437a6.866,6.866,0,0,0,4.9,4.857C25.322,103,42.666,103,42.666,103s17.345,0,21.67-1.167a6.866,6.866,0,0,0,4.9-4.857C70.4,92.623,70.4,83.539,70.4,83.539S70.4,74.456,69.241,70.1ZM36.994,91.787V75.292l14.5,8.247Z" transform="translate(-14.933 -64)" fill="#fff" />
                            </svg>
                            <span class="tracking-wider">LIHAT VIDEO PROFIL</span>
                        </a>
                    </div>
                </div>
                <!-- END Hero Content -->
            </div>
        </div>
        <!-- END Hero Section: Image Cover With Header Actions Dark -->

        <?php get_template_part('partials/akreditasi') ?>

        <div id="content" class="flex-grow site-content">
            <?php get_template_part('partials/profil-jurusan') ?>
            <?php get_template_part('partials/dapodik') ?>
            <?php get_template_part('partials/ptk') ?>
            <?php get_template_part('partials/berita') ?>
            <?php get_template_part('partials/gallery') ?>


        </div>

        <?php get_template_part('partials/banner') ?>

        <?php do_action('themealfa_content_start'); ?>

        <main>
            <?php
            get_footer();
