<?php get_header(); ?>
<!-- /header get -->

<!-- header-bottom -->
	<div class="header-bottom">
		<div class="header-bottom-top">
			<ul>
				<li><a href="#" class="g"> </a></li>
				<li><a href="#" class="p"> </a></li>
				<li><a href="#" class="facebook"> </a></li>
				<li><a href="#" class="twitter"> </a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
<!-- banner -->
		<div class="banner">
<!-- Slider-starts-Here -->

				 <script>
				    // You can also use "$(window).load(function() {"
				    $(function () {
				      // Slideshow 4
				      $("#slider3").responsiveSlides({
				        auto: true,
				        pager: false,
				        nav: true,
				        speed: 500,
				        namespace: "callbacks",
				        before: function () {
				          $('.events').append("<li>before event fired.</li>");
				        },
				        after: function () {
				          $('.events').append("<li>after event fired.</li>");
				        }
				      });
				
				    });
				  </script>
			<!--//End-slider-script -->
				<div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
					<ul class="rslides" id="slider3">
						<li>
						<!-- /looping start -->
							<div class="banner-inf">
								<h3>soluta nobis est eligendi cumque</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis, ante interdum vehicula pretium, dui enim porta
								lectus, non euismod tortor ante eu libero</p>
								<a href="single.html">See More</a>
							</div>
						</li>
					</ul>
				</div>
		</div>
<!-- //banner -->

<!-- //banner-bottom -->
<!-- blog -->
			<div class="blog">
				<div class="blog-left">
					<!-- Area Kolom Utama -->
					<?php if (is_front_page() && is_home()) { ?>
					    <?php
					    query_posts("shohposts=2");
					    if (have_posts()) {
					        while (have_posts()) {
					            the_post();
					            get_template_part('content-loop', get_post_format());
					        }
					        ?>
					        <nav class="nav-page">
					            <ul class="pager">
					                <li class="previous"><?php previous_posts_link( '&larr; Sebelumnya' ); ?></li>
					                <li class="next"><?php next_posts_link( 'Selanjutnya &rarr;' ); ?></li>
					            </ul>
					        </nav>
					        <?php
					    } else {
					        get_template_part('content', 'none');
					    }
					} else {
					    // jika bukan homepage
					}
					?>
				</div>
				
				<!-- /area sidebar -->
				<?php get_sidebar(); ?>

<!-- //blog -->
			</div>
<!-- //header-bottom -->
		</div>
	</div>
<!-- //banner-body -->
<!-- /file footer -->
<?php get_footer(); ?>