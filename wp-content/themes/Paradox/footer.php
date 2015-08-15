<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>
		</div><!--.body-content-->			
		<footer class="footer">	
			<section class="creds">
				<div class="container">		        
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-sm-4 col-md-2">
							<a href="http://www.bbb.org/fort-worth/business-reviews/electric-equipment-service-and-repair/tlc-electrical-in-southlake-tx-131500473" target="_blank">
								<img class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/bbb.png" alt="BBB">
							</a>
						</div>
						<div class="col-sm-4 col-md-2">
							<a href="https://www.customerlobby.com/reviews/19501/tlc-electrical/" target="_blank">
								<img class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-lobby.gif" alt="Reviews">
							</a>
						</div>	
						<div class="col-sm-4 col-md-2">
							<a href="http://www.eaton.com/EN/Eaton/ProductsServices/Electrical/index.htm" target="_blank">
								<img class="img-responsive cred-img cred-square" src="<?php echo get_template_directory_uri(); ?>/assets/images/eaton.png" alt="Eaton">
							</a>
						</div>	
						<div class="col-sm-4 col-md-2">
							<a href="/financing-payment-options/">
								<img class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/financing2.png" alt="Financing">
							</a>
						</div>																						
						<div class="col-sm-4 col-md-2">
							<a href="/about-tlc-electrical">
								<img class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/awards2.png" alt="Awards">
							</a>
						</div>																					
					</div>
				</div>
			</section>			
      		<section class="small-footer">
      			<div class="container">		        
					<div class="row">
			        	<div class="col-md-4">
			        		<div class="pull-left footer-credits">		        			
		        				<a href="<?php echo esc_url(home_url('/')); ?>">			        			
		        					<?php dynamic_sidebar('footer-credits'); ?>
		        				</a>
			        		</div>			
			        	</div>	        	
			        	<div class="col-md-4 text-center">
			        		<ul class="list-inline social-links">
			        			<li><a href="https://www.facebook.com/tlcelectrical" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			        			<li><a href="https://twitter.com/tlcelectricaltx" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			        			<li><a href="https://plus.google.com/+Tlcelectricalsouthlake-electricians" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>			        			
			        			<li><a href="https://www.youtube.com/user/southlakeelectrician" title="You Tube"><i class="fa fa-youtube"></i></a></li>			
			        			<li><a href="https://www.pinterest.com/tlcelectrical/" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
			        		</ul>
			        	</div>
		        		<div class="col-md-4">
			        		<div class="pull-right footer-paradox text-right">	        			
			        			<ul class="list-inline">
				        			<li><a href="/contact-tlc-electrical">
				        				Contact Us
				        			</a></li>		        				
				        			<li>
				        				TECL19542
				        			</li>			        			
				        			<li><a href="http://paradoxcreative.com" target="_blank">
				        				Site crafted by Paradox
				        			</a></li>
				        		</ul>
			        		</div>
			        	</div>				        	
			        </div>
			    </div>
			</section>
      		<section class="bottom-footer">
      			<div class="container">
      				<div class="row">
      					<div class="col-md-12">
			        		<div class="text-center bottom-nav">			        			
			        			<?php dynamic_sidebar('bottom-menu'); ?>
			        		</div>
			        	</div>
			        </div>
	        	</div> <!-- .container -->
	        </section>				
      	</footer>			
		<!--wordpress footer-->
		<?php wp_footer(); ?> 

		<!-- Typekit -->
		<script src="//use.typekit.net/ics8vpr.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>		
	</body>
</html>