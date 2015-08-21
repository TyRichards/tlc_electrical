<?php
/*
Template Name: Single Column
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
            <main class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3 main-col page-content">            
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
                <div class="cta">                    
                    <a class="btn btn-primary"><i class="fa fa-calendar"></i>Schedule Online</a>
                    <a class="btn btn-primary"><i class="fa fa-phone"></i>(817) 424-2684</a>
                </div>                 
            </main>            
        </div>
    </div>
</section>

<?php get_footer(); ?> 
