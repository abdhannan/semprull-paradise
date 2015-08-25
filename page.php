<?php
// include header
?>

<?php get_header(); ?>
			<div class="pages">
				<div class="headdings">
					    <!-- Area Kolom Utama -->
		            <?php
		            if (have_posts()) {
		                while (have_posts()) {
		                    the_post();
		                    get_template_part('content-page', get_post_format());
		                }
		             }
		            ?>
				</div>
			</div> <!-- /pages -->

<?php
// include footer
?>

<?php get_footer(); ?>