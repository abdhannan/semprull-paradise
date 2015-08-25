<?php get_header(); ?>

	<div class="single-page-artical">
		<!-- Area Kolom Utama -->
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('content', get_post_format());
                }
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif; // ini untuk menampilkan comentar
            } else {
                get_template_part('content', 'none');
            }
            ?>
	</div>

<?php get_footer(); ?>