<?php get_header(); ?>

<div class="max-w-3xl px-4 mx-auto my-8 md:my-14 lg:px-0">

    <?php if (have_posts()) : ?>

        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', 'single'); ?>



        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();
