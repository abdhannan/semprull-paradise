<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3>About <?php echo bloginfo('name'); ?></h3>
					<div class="footer-grd-left">
						<img src="wp-content/themes/semprull-amazing/images/11.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd-left">
						<p>Nam libero tempore, cum 
							soluta nobis est eligendi optio cumque nihil impedit quo minus 
							id quod maxime placeat facere possimus, omnis voluptas assumenda 
							est, omnis dolor repellendus</p>
					</div>
					<div class="clearfix"> </div>
				</div>

				<!-- footer widget -->
				<?php if ( is_active_sidebar ( 'footer-widgets' )) :?>
				<div class="col-md-3 footer-grid">
					<?php dynamic_sidebar('footer-widgets'); ?>
				</div>
				<?php endif; ?>

				<!-- /footer widget 1 -->
				<?php if ( is_active_sidebar('footer-1-widgets') ) :?>
				<div class="col-md-3 footer-grid">
					<?php dynamic_sidebar('footer-1-widgets'); ?>
				</div>
				<?php endif; ?>


				<div class="col-md-3 footer-grid">
					<h3>Flckr Posts</h3>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/7.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/8.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/9.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="clearfix"> </div>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/10.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/7.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="footer-grd">
						<img src="wp-content/themes/semprull-amazing/images/8.jpg" class="img-responsive" alt=" " />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<p>© <?php the_date('Y'); ?> <?php echo bloginfo('name'); ?>. All rights reserved | Design by <a href="http://www.facebook.com/hfatir1"> Abd Hannan</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
		
<!-- //for bootstrap working -->
</body>
</html>