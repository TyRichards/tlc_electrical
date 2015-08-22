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
								<img style="padding-top:21px;" class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/bbb.png" alt="BBB">
							</a>
						</div>
						<div class="col-sm-4 col-md-2">
							<a href="https://www.customerlobby.com/reviews/19501/tlc-electrical/" target="_blank">
								<img style="padding:16px 26px;max-width: 205px;"  class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/customer-lobby.gif" alt="Reviews">
							</a>
						</div>	
						<div class="col-sm-4 col-md-2">
							<a href="" target="_blank" data-toggle="modal" data-target="#myModal">
								<img class="img-responsive cred-img cred-square" src="<?php echo get_template_directory_uri(); ?>/assets/images/eaton.png" alt="Eaton">
							</a>						
						</div>	
						<div class="col-sm-4 col-md-2">
							<a href="/financing-payment-options/">
								<img style="padding:21px 12px;" class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/financing2.png" alt="Financing">
							</a>
						</div>																						
						<div class="col-sm-4 col-md-2">
							<a href="/awards">
								<img style="padding:21px 12px;" class="img-responsive cred-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/awards2.png" alt="Awards">
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
				        				<a href="#" data-toggle="modal" data-target="#myModal2">
				        					TECL19542 <i class="fa fa-question-circle"></i>
				        				</a>
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

		<!-- Eaton Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h5 class="modal-title text-center" id="myModalLabel">What is Eaton Certified Contractor Network (ECCN)?</h5>
		      </div>
		      <div class="modal-body small">
		        <ul>
		        	<li>A new national network of highly qualified, certified electricians installing the world’s best home electrical / communications systems.</li> 
		        	<li>An alliance between electrical contractors, suppliers and Eaton for personalized, professional service.</li>
		        	<li>A comprehensive set of business tools designed to raise the bar for customer connectivity and professionalism.</li>
		        	<li>A network that provides installation assurance and high quality protection for the homeowner.</li>
		        </ul>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- TECL Modal -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h5 class="modal-title text-center" id="myModalLabel2">TLC Electrical is licensed</h5>
		      </div>
		      <div class="modal-body small">
					<p>Being a “licensed electrician” in the State of Texas is not enough to perform “licensed” electrical work.  Individuals with a Journeyman, Wiremen, or Apprentice license must be employed by a Licensed Electrical Contractor. To perform any electrical work in the State of Texas requires  a  Texas  Electrical  Contractor  License  (TECL)  issued  by Texas Department of Licensing and Registration (TDLR).</p>
					<p>Texas Electrical Contractors must maintain minimum insurance requirements, have a licensed Master Electrician as a full time employee, employ electricians with current TDLR issued Journeyman, Wireman, or Apprentices  licenses,  and  pay  annual  licensing  and renewal  fees  to  TDLR.   Some insurance companies do not cover damage caused by work performed by unlicensed contractors or individuals.  Always ask for the TECL number of any electrical contractor. </p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>		

		<!--wordpress footer-->
		<?php wp_footer(); ?> 
		
		<!-- Infinite Scroll Callback -->
		<script> 

		</script>		

		<!-- Typekit -->
		<script src="//use.typekit.net/ics8vpr.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>		
	</body>
</html>