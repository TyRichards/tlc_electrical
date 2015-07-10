<?php
/*
Template Name: Specials
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
                    echo '<p class="lead">' . get_field('subhead') . '</p>';                        
                } ?>  
            </div>            
        </div>        
    </div>
</section>

<section class="content">           
    <div class="container">
        <div class="row">           
            <main class="col-sm-12 main-col page-content">

                <div id="masonry-container" class="row">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                                                                                    
                        <?php
                        $args = array('post_type' => 'specials', 'posts_per_page' => -1);
                        $my_secondary_loop = new WP_Query( $args );

                        if( $my_secondary_loop->have_posts() ):
                            while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post(); ?>
                                
                            <div class="photobox text-center">           
                                <div class="special-body">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="special-footer">
                                    <a class="" href="8174242684">Call (817) 424-2684</a>
                                    <a class="" href="/schedule">Schedule Online</a>
                                    <a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>" target="_blank"><i class="fa fa-print"></i>Print</a>
                                    <!-- <span>Please print and present this coupon at time of service</span> -->
                                </div>
                                <!-- <img src="<?php // echo get_template_directory_uri(); ?>/assets/images/placeholder.png" width="322" height="377" />                                 -->
                            </div>
                                       
                        <?php endwhile; endif;
                            wp_reset_postdata();
                        ?>                            
                    <?php endwhile; endif; ?>

                </div>

            </main>
        </div>
    </div>
</section>



<?php get_footer(); ?> 
