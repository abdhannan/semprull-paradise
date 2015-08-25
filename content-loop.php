					<div class="blog-left-grid" id="post-<?php the_ID(); ?>" <?php post_class('content-loop'); ?>>
						<div class="blog-left-grid-left">
							<h3>
								<a href="<?php the_permalink(); ?> "><?php the_title(); ?> </a>
							</h3>

							<p>by 
							<span>
							<?php the_author(); ?> 
							</span> | <?php the_date(); ?> | 
							<span>
								<?php if (has_category()) : ?> 
								<?php the_category(', '); ?>
							</span>
							</p> 
							<?php endif; ?> <!-- /category -->

						</div> <!-- /.blog-left-grid-left -->

						<div class="blog-left-grid-right">
							<?php if (comments_open()) : ?>
							<a href="#" ><?php comments_popup_link('komentar', '1 komentar', '% komentar'); ?> </a>
							<?php endif; // comments_open()  ?>
						</div> <!-- /.blog-left-grid-right -->

						<div class="clearfix"> </div>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'entry-img-thumbnail img-thumbnail')); ?></a>
						<p class="para">
							<?php the_excerpt(); ?>
						</p>
						<div class="rd-mre">
							<a href="<?php the_permalink(); ?>" class="hvr-bounce-to-bottom quod">Read More</a>
						</div> <!-- /.para -->
					</div> <!-- /.blog-left-grid -->