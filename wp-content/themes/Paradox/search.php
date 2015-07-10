<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="masthead masthead-interior">    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1><i class="fa fa-search fa-left"></i>Search Results</h1>          
                <div class="row">                                 
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-6 col-lg-offset-3 searchbar">                                                
                        <p class="search-label small text-center" style="margin-top: 25px;">What seems to be the problem?</p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                        <p class="search-sublabel text-center small">
                            See a list of all <a href="<?php echo get_site_url(); ?>/list-of-services">Services</a>
                        </p>
                    </div>
                </div>    
            </div>            
        </div>        
    </div>
</section>

<section class="content">           
    <div class="container">
        <div class="row">           
            <main class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 main-col page-content">
                <div id="main" class="site-main" role="main">
                    <?php //
                    // $wp_query->query_vars["posts_per_page"] = 20;
                    // $wp_query->get_posts();
                    ?>                                 	
					<?php if (have_posts()) { ?> 
					<header class="page-header">
						<p class="lead text-center"><?php printf(__('Search Results for <strong><i>%s</i></strong>', 'bootstrap-basic'), '<span>' . get_search_query('showposts=999999') . '</span>'); ?></p>
					</header><!-- .page-header -->
					<?php 
					// start the loop
					while (have_posts()) {
						the_post();
						
						/* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part('content', 'search');
					}// end while
					
					bootstrapBasicPagination();
					?> 
					<?php } else { ?> 
					<?php get_template_part('no-results', 'search'); ?>
					<?php } // endif; ?> 
				</div>
			</main>
		</div>
	</div>
</section>


<?php get_footer(); ?> 