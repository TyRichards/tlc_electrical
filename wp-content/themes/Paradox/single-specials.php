<?php get_header(); ?>

    <body <?php body_class(); ?>>
            
            <div id="content">

                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                            <div <?php post_class('content-wrapper'); ?>>
                                  
                                  <div class="text-center">
                                        <a class="print-button button orange bottom-margin block" href="">
                                            <i class="fa fa-print fa-left"></i>
                                            Print This Special
                                        </a>                                                                                                                    
                                  </div>
                                    
                                  <div class="special-item">                                    
                                        <div class="special-header">
                                            <h2><?php the_title(); ?></h2>
                                            <!--<a class="print-icon">Print</a>
                                            <a class="call-icon">Call</a>
                                            <a class="schedule-icon">Schedule</a>-->
                                            <div class="clear"></div>
                                        </div><!-- end .special-header -->
                                            <div class="special-body">
                                                <div class="special-feature-img">
                                                </div>                                          
                                                <div class="special-content">
                                                    <?php the_content(); ?>                                 
                                                    <div class="clear"></div>
                                                </div><!-- end .special-content -->                                         
                                                <div class="special-footer">
                                                    <span class="website">www.tlcelectrical.com</span>
                                                    <span class="phone">(817)-424-2684</span>
                                                    <div class="terms">
                                                    
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
                                    
                                  <div class="text-center" style="margin-top:50px;">
                                        <a class="button blue bottom-margin" href="<?php echo home_url() ?>/specials">
                                            <i class="fa fa-chevron-left fa-left"></i>
                                            View All Specials
                                        </a>
                                        <a class="button green bottom-margin" href="tel:8174242684">
                                            <i class="fa fa-phone fa-left"></i>
                                            Call 817-424-2684
                                        </a>
                                        <a class="button green bottom-margin" href="<?php echo home_url() ?>/schedule">
                                            <i class="fa fa-calendar fa-left"></i>
                                            Schedule Service
                                        </a>                                                                                                                    
                                  </div>                                                                        
                        
                            </div> <!-- end content-wrapper -->
                    
                        <?php endwhile; endif; ?>
    
            </div> <!-- end #content -->
            
            <script>
                jQuery(document).ready(function($) {
                    $('.print-button').click(function() {
                        window.print();  
                        return false;
                    });
                });
            </script>
            
<?php get_footer(); ?>