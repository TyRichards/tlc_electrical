<?php get_header('special'); ?>

    <body <?php body_class(); ?> style="background:white!important;" onload="window.print()">
            
            <div id="content">



                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                            <div <?php post_class('content-wrapper'); ?>>

                                <div class="row">

                                <div class="photobox text-center" style="width:300px; margin:20px;">                                    
                                        <div class="special-header text-left">
                                            <img style="max-width:281px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">

                                            <!-- <div class="clear"></div> -->
                                        </div><!-- end .special-header -->
                                        <div class="special-body">
                                            <br>
                                            <h2><?php the_title(); ?></h2>                  
                                            <p><?php the_content(); ?></p>                                 
                                                <!-- <div class="clear"></div> -->
                                        </div>
                                                                                 
                                        <div class="special-footer">
                                            <a class="" href="8174242684">Call (817) 424-2684</a><br>
                                            <a class="" href="/schedule">Schedule Online</a>

                                            <div class="terms" style="font-size:10px;">
                                    
                                                <?php
                                                 
                                                if(get_field('disclaimer')) {
                                                    echo '<p>' . get_field('disclaimer') . '</p>';
                                                } else {                                        
                                                    echo '<p>' . 'Offers cannot be combined. Discounts are not applicable to service fee. Terms and conditions may apply. Offers subject to change without notice. Please present coupon at time of service.' . '</p>';
                                                }
                                                
                                                 
                                                ?>                                                                     
                                            </div>                                              
                                        </div>                                                                              
                                            </div><!-- .special-body -->
                                  </div><!-- .special-item -->
                        
                            </div> <!-- end content-wrapper -->
                    
                        <?php endwhile; endif; ?>

                        <a class="small" href="javascript:window.print()" onLoad="window.print()" target="_blank"><i class="fa fa-print"></i> Print this special</a>
    
            </div> <!-- end #content -->
            
            <script>
                jQuery(document).ready(function($) {
                    $('.print-button').click(function() {
                        window.print();  
                        return false;
                    });
                });
            </script>
            
<?php // get_footer(); ?>