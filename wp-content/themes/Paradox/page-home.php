<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead">
    <!-- <div class="background">&nbsp;</div> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-center">
                    Stressing over electrical problems? <!--<?php //echo get_field('headline') ?> -->
                </h1>
                <p class="lead text-center">
                    <!--<?php // echo get_field('subheading') ?>-->
                    Not to worry. TLC Electrical has you covered on all things electrical in your home and office.
                </p>
                <div class="row">             
                    <div class="col-md-6 col-md-offset-3 searchbar">                        
                        <p class="search-label text-center small"><strong>What seems to be the problem?</strong></p>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                        <p class="search-sublabel text-center small">
                            See a list of all <a href="<?php echo get_template_directory_uri(); ?>/services">Services</a>
                        </p>
                    </div>
                </div>                
            </div>            
        </div>        
    </div>
</section>

<section class="content">           
    <div class="container-fluid">
        <div class="row">           
            <div class="col-md-5 col-md-offset-2 main-col page-content">
                <div id="main" class="site-main" role="main">
                    <?php 
                    while (have_posts()) {
                      the_post();

                      get_template_part('content', 'page');

                      echo "\n\n";
                      
                      // If comments are open or we have at least one comment, load up the comment template
                      if (comments_open() || '0' != get_comments_number()) {
                        comments_template();
                      }

                      echo "\n\n";

                    } //endwhile;
                    ?> 
                </div>                       
            </div>
            <div class="col-md-3 sidebar sidebar-right">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="spot">
                            <div <?php body_class(); ?>>  
                                <h3 class="spot-header">Custom Title Area</h3>
                                <img class="img-responsive spot-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg"/>
                                <p class="spot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet ipsum velit, quis rhoncus orci viverra ac. Quisque eget lobortis eros, non impe rdiet leo. Nam felis nisl, aliquet at. aliquam ut, elementum quis odio. Morbi elit orci, gravida in fermentum ac, tincidunt in.</p>
                            </div>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 