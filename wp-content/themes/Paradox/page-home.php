<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="masthead">    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">  
                <h1 style="margin-top:0!important;">Electricians Available Today</h1>
                <h2 class="h1" style="margin-top:0!important;"><?php echo date('l F jS'); ?></h1>
                <div class="row">                                 
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-6 col-lg-offset-3 searchbar" style="margin-top:25px;">                                                
<!--                         <p class="search-label small text-center">
                            <?php // if(get_field('headline')) {
                                // echo get_field('headline');                        
                            // } ?>
                        </p> -->
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                        <p class="search-sublabel text-center small">
                            See a list of all <a href="<?php echo get_site_url(); ?>/services">Services</a>
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
            <main class="col-md-7 col-md-offset-0 col-lg-6 col-lg-offset-1 main-col page-content">                
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
            </main>
            <aside class="col-md-4 col-md-1 col-lg-4 col-lg-1 sidebar sidebar-right">
                <div class="spot">
                    <div <?php body_class(); ?>> 
                        <?php if(get_field('spot_title')) {
                            echo '<h3 class="spot-header">' . get_field('spot_title') . '</h3>';
                        } ?>
                        <?php if(get_field('spot_img')) { ?>
                            <img class="img-responsive spot-image" src="<?php the_field('spot_img') ?>" alt="TLC Electrical" />                        
                        <?php } ?>         
                        <?php if(get_field('spot_caption')) {
                            echo '<p class="spot-text">' . get_field('spot_caption') . '</p>';                        
                        } ?>                                                


<!--                         <h3 class="spot-header">Custom Title Area</h3>
                        <img class="img-responsive spot-image" src="<?php // echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg"/>
                        <p class="spot-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque aliquet ipsum velit, quis rhoncus orci viverra ac. Quisque eget lobortis eros, non impe rdiet leo. Nam felis nisl, aliquet at. aliquam ut, elementum quis odio. Morbi elit orci, gravida in fermentum ac, tincidunt in.</p> -->
                    </div>                       
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 