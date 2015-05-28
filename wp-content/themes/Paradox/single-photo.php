<?php get_header(); ?>

<section class="masthead masthead-interior">    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h1><?php the_title(); ?></h1>   
                <ul style="margin-top: 10px;" class="list-inline text-center">
                    <li class="back-btn"><?php echo previous_post_link('%link', '<i class="fa fa-arrow-left fa-left"></i>Previous', false); ?></li>
                    |
                    <li class="next-btn"><?php echo next_post_link('%link', 'Next<i class="fa fa-arrow-right fa-right"></i>', false); ?></li>
                </ul>                                                                        
            </div>            
        </div>        
    </div>
</section>

<section class="content">           
    <div class="container">
        <div class="row">           
            <main class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 main-col page-content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>                    
                    <div <?php post_class(); ?>>
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
                            $size = 'large';
                            $thumb = $image['sizes'][ $size ];
                            $width = $image['sizes'][ $size . '-width' ];
                            $height = $image['sizes'][ $size . '-height' ];
                         
                        ?>                                                                                  
                            <div class="main-img">                                  
                                <img class="photo-lg" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                                <p class="wp-caption-text text-center"><?php echo $caption; ?></p>   
                                <br> <br>
                                <?php // echo $yoast_meta; ?>  
                                <a style="margin-top:5px;" class="btn btn-sm btn-primary" href="#">See More Like This</a>&nbsp;&nbsp;<a style="margin-top:5px;" class="btn btn-sm btn-primary" href="">Find Out More About <?php the_title(); ?></a>          
                                <br><br>                                  

                                <!-- <div class="share-btns"> 
                                    <div class="share fb-share">
                                        <iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=441793442610232" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe>
                                    </div>
                                    <div class="share twitter-share">
                                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php echo $yoast_meta; ?>" data-via="tlcelectricaltx" data-count="none" data-hashtags="tlcelectrical">
                                            Tweet
                                        </a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                                        </script>
                                    </div>
                                    <div class="share pinterest-share">                                             
                                        <a href="//www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=<?php // echo $thumb; ?>&description=<?php // echo $yoast_meta; ?>" data-pin-do="buttonPin" data-pin-config="none" data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
                                        <!-- Please call pinit.js only once per page -->
                                        <!-- <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js">
                                        </script> -->                      
                                    <!-- </div>
                                    <div class="share email-share">                             
                                        <a href="mailto:?subject=TLC Electrical Photo&body=Check out this electrifying photo from TLC Electrical: <?php the_permalink() ?>%0D%0A%0D%0ATLC Electrical - TECL19542%0D%0A%0D%0A2812 Market Loop - Southlake, TX 76092%0D%0AFt. Worth (817) 424-2684 - Dallas (972) 393-0791 - Denton (940) 382-6255%0D%0Afax (817) 552-1127%0D%0Ainfo@tlcelectrical.com%0D%0A%0D%0Awww.tlcelectrical.com" class="btn btn-xs orange">
                                            <i class="fa fa-envelope fa-left"></i>
                                            Email
                                        </a>
                                    </div>
                                </div> -->

                            </div>                        
                            <div class="main-content">
                            <?php the_content(); ?>
                            </div><!-- end .main-content -->

                        <?php endif; ?>     
                          
                    </div><!-- end .post -->                          
                    <div class="clear"></div>                        
                    <?php comments_template(); ?>            
                <?php endwhile; endif; ?>
                    
            </main>            
        </div>
    </div>
</section>

<?php get_footer(); ?>