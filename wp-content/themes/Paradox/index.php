<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="masthead masthead-interior">     
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>TLC Electrical Blog</h1>          
                <p class="lead">TLC has you covered on all things electrical in your home and office. <br>Call or <a href="/schedule">schedule online</a> now</a>
            </div>            
        </div>        
    </div>
</section>
<section class="content">           
    <div class="container">
        <div class="row">           
            <main class="col-sm-8 col-md-7 col-md-offset-0 col-lg-6 col-lg-offset-1 main-col page-content">
                <div id="main" class="site-main" role="main">                	
					<?php if (have_posts()) { ?> 
					<?php 
					// start the loop
					while (have_posts()) {
						the_post();
						
						/* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part('content', get_post_format());
					}// end while
					
					bootstrapBasicPagination();
					?> 
					<?php } else { ?> 
					<?php get_template_part('no-results', 'index'); ?>
					<?php } // endif; ?>					
                </div>           
            </main>
		    <aside class="col-sm-4 col-md-5 col-md-offset-0 col-lg-4 col-lg-offset-0 sidebar sidebar-right">   
            	<?php dynamic_sidebar('sidebar-blog'); ?>                     
		    </aside>               
        </div>      
    </div>
</section>		
 
<?php get_footer(); ?> 