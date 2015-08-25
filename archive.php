<?php get_header(); ?>

    <div class="pages">
        <div class="headdings">


            <!-- Area Kolom Utama -->

            <?php $queryTaxonomy = $wp_query->queried_object->taxonomy; ?>
            <h1 class="ghj">
                <?php echo $queryTaxonomy; ?>  <i><?php echo single_cat_title('', false); ?></i>
                <?php if (category_description()) : // Show an optional category description  ?>
                    <small class="archive-desc"> <?php echo category_description(); ?> </small>
                <?php endif; ?>
            </h1>

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('content-loop', get_post_format());
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