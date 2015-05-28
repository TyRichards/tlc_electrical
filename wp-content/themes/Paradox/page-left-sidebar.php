<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="masthead masthead-interior">    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <?php if(get_field('headline')) {
                    echo '<h1>' . get_field('headline') . '</h1>';                        
                } else {
                    echo the_title( '<h1>', '</h1>' ); 
                } ?>   

                <?php if(get_field('subhead')) {
                    echo '<p>' . get_field('subhead') . '</p>';                        
                } ?>                
            </div>            
        </div>        
    </div>
</section>

<section class="content">
    <div class="container">        
        <div class="row">            
            <aside class="col-sm-4 col-md-5 col-md-offset-0 col-lg-4 col-lg-offset-1 sidebar sidebar-left">   
                <div class="text-center">                       
                    <a class="btn btn-primary btn-lg btn-block hidden-sm hidden-xs" href="/schedule">
                        Schedule Service Online
                        <span>for <?php the_title(); ?> — Save 10%</span>
                    </a>
                    <a class="btn btn-primary btn-lg btn-block visible-sm visible-xs" href="/schedule">
                        Schedule Online
                        <span>for <?php the_title(); ?></span>
                    </a>                    
                </div>
                <?php get_sidebar('default'); ?> 
                <?php if(get_field('sidebar_video')) { ?>
                    <div class="flex-video widescreen">                
                        <iframe src="//www.youtube.com/embed/<?php echo get_field('sidebar_video') ?>?autohide=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0" height="200" width="300" controls="2" allowfullscreen="" frameborder="0"></iframe>
                    </div>                                    
                <?php } ?>      
                <?php if(get_field('gallery_slug')) { ?>
                    <div class="text-center">                       
                        <a class="btn btn-primary btn-sm btn-block" href="/galleries/<?php echo get_field('gallery_slug') ?>">                        
                            View All Electrical Panels Photos
                        </a>                 
                    </div>  
                <?php } ?>                                              
            </aside>            
            <main class="col-sm-8 col-md-7 col-md-offset-0 col-lg-6 col-lg-offset-0 main-col page-content">
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
        </div>      
    </div>
</section>

<?php get_footer(); ?> 
