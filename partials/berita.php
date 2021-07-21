<section class="bg-white">
    <div class="py-12 mx-auto md:py-24">
        <div class="container flex items-center justify-between px-5 mx-auto mb-4">
            <div class="flex">
                <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/berita.svg" alt="" class="mr-5">
                <div>
                    <h2 class="text-3xl font-bold leading-tight">Berita Terbaru</h2>
                    <div class="text-sm text-gray-700">Nasional PSMK, Pendidikan, Kegiatan Sekolah</div>
                </div>
            </div>
            <a href="/berita/sekolah" class="hidden md:block text-secondary">Lihat Semua Berita</a>
        </div>
        <div class="py-8">
            <div class="carousel" data-flickity='{ "cellAlign": "left", "contain": true, "freeScroll": true, "prevNextButtons": false, "pageDots": false  }'>

                <?php
                // the query
                $the_query = new WP_Query(array(
                    'posts_per_page' => 6,
                ));
                ?>

                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="px-5 w-96 carousel-cell" aria-hidden="true">
                            <?php the_post_thumbnail('medium', array('class' => 'object-cover w-full h-56 rounded-lg shadow-lg')); ?>
                            <div class="mt-4 text-sm text-gray-700"><?php the_date() ?> - <span class="inline-block font-bold text-green-700"><?php foreach ((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span></div>
                            <h3 class="mt-2 text-2xl font-bold leading-tight text-gray-800"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="mt-1 text-sm content">
                                <?php echo get_the_excerpt(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else :
                    echo 'tidak ada post';
                endif; ?>

                <div class="hidden ml-40 lg:inline-block xl:ml-64"></div>

            </div>
        </div>
    </div>
</section>