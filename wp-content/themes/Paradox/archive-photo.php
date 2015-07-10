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

<section class="content" style="padding-top: 15px;">           
    <div class="container">
        <div class="row">            
            <main class="col-sm-12 main-col page-content text-center">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <div class="dropdown cat-dropdown">
                            <span style="font-size:12px;">Select a Category:</span>
                            <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                All Photos <i class="fa fa-right fa-caret-down"></i>
                                <!-- <span class="caret"></span> -->
                            </button>
                            <?php
                            //list terms in a given taxonomy (useful as a widget for twentyten)
                            $taxonomy = 'galleries';
                            $tax_terms = get_terms($taxonomy);
                            ?>                            
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <?php
                                foreach ($tax_terms as $tax_term) {
                                echo '<li>' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                                }
                                ?>                                
                            </ul>
                        </div>                        
                    </div>
                </div>
                <br>                
                
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
                <div id="masonry-container"> 
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); 
                        $do_not_duplicate[] = $post->ID;
                    ?>                     
                        <!-- <div <?php post_class(); ?> > -->
                        <div class="photobox">                                                                         
                            <?php                                  
                            $image = get_field('photo'); 
                            $yoast_meta = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);                                                            
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
                                <div class="share-btns">
                                    <div class="share pinterest-share">                                             
                                        <a href="//www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php echo $thumb; ?>&description=<?php  echo $yoast_meta; ?>" data-pin-do="buttonPin" data-pin-config="none" data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
                                        <!-- Please call pinit.js only once per page -->
                                        <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
                                    </div>                                                              
                                </div>
                             
                                <a href="<?php the_permalink() ?>" title="<?php echo $title; ?>">
                                                                                                 
                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                                </a> 
                            <?php endif; ?>                             
                        </div><!-- .photobox -->                                            
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