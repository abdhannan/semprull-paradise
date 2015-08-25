<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- title -->
		<title><?php wp_title('|' ,true,'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
<!-- start-smoth-scrolling -->
<?php wp_head(); ?>
</head>
	
<body>
<!-- banner-body -->
	<div class="banner-body">
		<div class="container">
<!-- header -->
			<div class="header">
				<div class="header-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						   <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
						  		<span><?php bloginfo('name'); ?></span>
						   </a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<?php
		                wp_nav_menu(array(
		                    'menu' => 'primary',
		                    'theme_location' => 'primary',
		                    'depth' => 2,
		                    'container' => 'div',
		                    'container_class' => 'collapse navbar-collapse nav-wil',
		                    'container_id' => 'bs-example-navbar-collapse-1',
		                    'menu_class' => 'nav navbar-nav hvr-bounce-to-bottom active',
		                    
		                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		                    'walker' => new wp_bootstrap_navwalker())
		                );
		                ?>

						</div><!-- /.navbar-collapse -->
					</nav>
				</div>
	
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
			<!-- //search-scripts -->
			</div>
<!-- //header -->