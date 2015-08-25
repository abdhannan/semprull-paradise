		<div class="artical-content" id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
			<h3><?php the_title(); ?></h3>
			<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('thumbnail', array('class' => 'entry-img-thumbnail img-thumbnail')); ?>
			<?php endif; ?>
			<p class="text-justify">
			<?php the_content(); ?>
			</p>
		</div>
		<div class="artical-links">
			<ul>
				<li><small> </small><span><?php the_date(); ?> </span></li>
				<li><a href="<?php the_author_link(); ?>"><small class="admin"> </small><span><?php the_author(); ?></span></a></li>

				<?php if (comments_open()) : ?>
				<li><a href="#"><small class="no"> </small><span><?php comments_popup_link('komentar', '1 komentar', '% komentar'); ?></span></a></li>
				<?php endif; // comments_open()  ?>

				<?php if (has_category()) : ?>
				<li><a href="<?php the_permalink(); ?>"><small class="posts"> </small><span> <?php the_category(', '); ?> </span></a></li>
				<?php endif; ?> <!-- /category -->

				<li><a href=" <?php the_permalink(); ?> "><small class="link"> </small><span>permalink</span></a></li>
			</ul>
		</div>
