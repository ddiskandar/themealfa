<?php get_header('category'); ?>

<div class="container px-4 mx-auto my-8 md:px-0">

    <?php if (have_posts()) : ?>
        <?php
        while (have_posts()) :
            the_post();
        ?>

            <?php get_template_part('template-parts/content', get_post_format()); ?>

        <?php endwhile; ?>

    <?php endif; ?>

</div>

<?php
get_footer();
