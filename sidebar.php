				<div class="blog-right">

					<div class="newsletter">
						<h3>Search everything</h3>
						<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
							<input type="text" value="<?php echo get_search_query(); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required="">
							<input type="submit" value="Send">
						</form>
					</div> <!-- /newsletter -->

					<?php if ( is_active_sidebar ( ' sidebar-widgets ' )) : ?>
					<div class="pgs">
					<?php dynamic_sidebar('sidebar-widgets'); ?>
					</div> <!-- /pgs -->
					<?php endif; ?>

				</div> <!-- /blog-right -->
				<div class="clearfix"> </div>