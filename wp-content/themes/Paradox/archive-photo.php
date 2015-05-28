<?php get_header(); ?>

<section class="masthead masthead-interior">    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1>Photos</h1>  
                <p class="lead">See what's possible with TLC Electrical</p>         
            </div>            
        </div>        
    </div>
</section>

<section class="content">           
    <div class="container">
        <div class="row">            
            <main class="col-sm-12 main-col page-content text-center">
                <div class="row">
                    <a class="btn btn-primary" href="#" style="margin: 15px 0 0 0;"><i class="fa fa-th-list"></i>Select Catagory</a>
                </div>
                <br><br>
                
                <?php                       
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;                   
                                        
                // Make "Exclude From Search" false in CPT Reg
                $loop = new WP_Query( array( 
                    'post_type' => 'photo', 
/*                      'galleries' => $current_term,  */
                    'orderby' => 'DESC',
                    'posts_per_page' => 40,
                    'paged' => $paged,
                    ) 
                );                 
                $wp_query = $loop;                              
                ?>               
                
<!--
                <div class="navigation">
                    <div class="back-btn"><?php echo previous_posts_link( '◄ Back' ); ?></div>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <div class="next-btn"><?php echo next_posts_link('Next ►'); ?></div>
                </div>                  
-->                     
                <div id="masonry-container" class="row"> 
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $do_not_duplicate[] = $post->ID;
                    ?>                     
                        <!-- <div <?php post_class(); ?> > -->
                        <div class="photobox">                                                                     
                            <?php                                  
                            $image = get_field('photo');                                 
                            if( !empty($image) ): 
                             
                                // vars
                                $url = $image['url'];
                                $title = $image['title'];
                                $alt = $image['alt'];
                                $caption = $image['caption'];
                             
                                // thumbnail
                                $size = 'masonry-thumb';
                                $thumb = $image['sizes'][ $size ];
                                $width = $image['sizes'][ $size . '-width' ];
                                $height = $image['sizes'][ $size . '-height' ];
                             
                                ?>                               
                             
                                <a href="<?php the_permalink() ?>" title="<?php echo $title; ?>">
                                                                                                 
                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                </a> 
                            <?php endif; ?>                             
                        </div><!-- .photobox -->   
                        <div class="clear-fix">                 
                    <?php endwhile; ?>  
                </div><!-- end .row --> 
                
                <div class="clearfix">

                <div class="row">                
                    <?php if (function_exists('bones_page_navi')) { ?>
                            <?php bones_page_navi(); ?>
                        <?php } else { ?>
                            <nav class="wp-prev-next">
                                <ul class="list-inline">
                                    <li class="prev-link"><?php next_posts_link(__('<i class="fa fa-arrow-left fa-left"></i>Older Entries', "bonestheme")) ?></li>
                                    |
                                    <li class="next-link"><?php previous_posts_link(__('Newer Entries<i class="fa fa-arrow-right fa-right"></i>', "bonestheme")) ?></li>
                                </ul>
                            </nav>
                        <?php } ?>
                    <?php end; ?>   
                </div><!-- .row -->                
            </main>
        </div>
    </div>
</section>

<?php get_footer(); ?>