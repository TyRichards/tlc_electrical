<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">        
        <div class="row">         	
            <main class="col-md-7 col-md-offset-0 col-lg-7 col-lg-offset-1 main-col page-content">                
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
		    <aside class="col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-1 sidebar sidebar-box">		        
            	<?php dynamic_sidebar('sidebar-blog'); ?>                     
		    </aside>               
        </div>      
    </div>
</section>		
 
<?php get_footer(); ?> 