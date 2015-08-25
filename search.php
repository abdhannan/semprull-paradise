<?php get_header(); ?>
<div class="pages">
    <div class="headdings">


            <!-- Area Kolom Utama -->

            <h1 class="ghj">
                <strong><?php echo $wp_query->found_posts; ?></strong> hasil ditemukan.
                <?php
                $maxNumPages = $wp_query->max_num_pages;
                $queryPaged = ($wp_query->query['paged'] == NULL) ? '1' : $wp_query->query['paged'];
                if ($maxNumPages > 0) {
                    echo 'Halaman <strong>' . $queryPaged . '</strong> dari <strong>' . $maxNumPages . '</strong>.';
                }
                ?>
            </h1>

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('content-loop', 'search-page');
                }
                ?>
                <nav class="nav-page">
                    <ul class="pager">
                        <li class="previous"><?php previous_posts_link('&larr; Sebelumnya'); ?></li>
                        <li class="next"><?php next_posts_link('Selanjutnya &rarr;'); ?></li>
                    </ul>
                </nav>
                <?php
            } else {
                get_template_part('content', 'none');
            }
            ?>

    </div>
</div>
<?php get_footer(); ?>