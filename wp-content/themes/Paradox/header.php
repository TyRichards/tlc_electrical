<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- <meta name="description" content="<?php // bloginfo('description'); ?>"> -->
		<meta name="author" content="Tami Church">
		<title><?php wp_title('|', true, 'right'); ?></title>		
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">		

		<?php wp_head(); ?>
	
		<!--[if lte IE 8]>
			<meta http-equiv="REFRESH" content="0;url=http://www.browsehappy.com/">
		<![endif]-->	

		<!-- SMOOTH SCROLL -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top
		        }, 300);
		        return false;
		      }
		    }
		  });
		});
		</script>
		<!-- End of SMOOTH SCROLL -->
	</head>
	<body <?php body_class(); ?> >               		

		<!-- Google Analytics -->	

		<!--[if lte IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->	
	    
		<?php global $post; ?>
		<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
		?>		

		<div class="bg-fade" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/header-fade.png') !important;" alt="<?php wp_title('|', true, 'right'); ?>">
		</div>		

        <?php         	
        $feature_img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );				
        if ( has_post_thumbnail() ) { ?>
			
			<div class="bg-image feature-image wp-post-image" style="background-image: url('<?php echo $feature_img ?>')" alt="<?php wp_title('|', true, 'right'); ?>">
			</div>                    	           
        <?php } ?> 

<!-- 		<div id="bg-image" class="feature-image attachment-sidebar-thumb wp-post-image" style="background-image: url(<?php //echo $image[0]; ?> ) !important;" alt="<?php //wp_title('|', true, 'right'); ?>"></div> -->		
		
		<?php do_action('before'); ?> 
		<header>				
			<section class="top-navbar top">				
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">						
						<div class="navbar-header">																	
							<button type="button" class="navbar-toggle navbar-right" data-toggle="collapse" data-target=".navbar-primary-collapse">
								<div class="toggle-title hidden-xxs">Menu</div>
								<div class="toggle-bars">
									<span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>									
								</div>
							</button>
							<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
								<?php // echo esc_attr(get_bloginfo('name', 'display')); ?>
								<img class="img-responsive" style="max-width:281px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
							</a>					
						</div>						
						<div class="collapse navbar-collapse navbar-primary-collapse">
							<ul class="nav navbar-nav navbar-right nav-special hidden-xs hidden-sm">
								<li class="menu-item btn-menu schedule">
									<a title="Save 10%" href="/schedule/">
										<i class="fa fa-calendar"></i>
										Schedule Service
										<span>— Save 10% —</span>
									</a>
								</li>
								<li class="menu-item btn-menu phone">
									<a title="24-Hr Service" href="tel:8174242684">
										<i class="fa fa-phone"></i>
										(817) 424-2684
										<span>— 24-Hr Service –</span>
									</a>									
								</li>								
							</ul>								
							<?php wp_nav_menu(array(
								'theme_location' => 'primary', 
								'container' => false, 
								'menu_class' => 'nav navbar-nav navbar-right primary-menu', 
								'walker' => new BootstrapBasicMyWalkerNavMenu()
								)
							); ?>													
						</div><!--.navbar-collapse-->
					</div>
				</nav>				
			</section> <!-- section-navbar -->
		</header>		
			
			
		<div class="body-content">

			<!-- Mobile Landing Section -->
			<section class="mobile-landing visible-xs visible-sm col-xs-12">
			    <div class="col-xs-6 col-no-padding-xs call-to-action">
				    <a class="btn btn-primary btn-sm btn-block col-xs-12" href="tel:8174242684" style="margin-top:0px;margin-right:5px;">
				        <i class="fa fa-phone fa-1x hidden-xxs"></i>
				        (817) 424-2684
				    </a>
			    </div>			    
			    <div class="col-xs-6 col-no-padding-xs call-to-action">
				    <a class="btn btn-primary btn-sm btn-block col-xs-12" href="/schedule" style="margin-top:0px; margin-left:5px;">
				        <i class="fa fa-calendar fa-1x hidden-xxs"></i>
				        Schedule Online
				    </a>
			    </div>			    
			</section>			