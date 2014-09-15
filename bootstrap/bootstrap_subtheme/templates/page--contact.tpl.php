<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">
	<meta charset='UTF-8' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">
    <title>Bootstrap 101 Template</title>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container nav_container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Radio2 </a>
        </div>
        <div class="navbar-collapse collapse">
		 <ul class="nav navbar-nav">
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
		  </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
<div class="main_wrapper">

    <div class="container radio2-container"><!-- Main container Strats--> 
	
		<div class="row"><!-- Main row Starts-->
			<div class="col-ie-3 col-xs-3 col-sm-12 col-md-3 col-lg-3"><!-- col-md-3 Starts-->
				<div class="logo1"> <!-- Logo Holder -->
					<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/generic/large/logo/logo.png" width="100%">
				</div>	
			</div><!-- col-md-3 Ends-->
			<div class="col-ie-7 col-xs-7 col-sm-12 col-md-7 col-lg-7 no_padding"><!-- col-md-7 Starts-->
				 <div class="dynamic_timed_banner"><!-- Timed Banner Holder -->
				 	<!--<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/timed_banner.png" width="100%" height="auto">-->
					<?php //print render($page['timed_banner']);?>
				 </div>
			</div><!-- col-md-7 Ends-->
            
			<div class="col-ie-2 col-xs-2 col-sm-12 col-md-2 col-lg-2 no_padding"><!-- col-md-2 Starts-->
				<div class="listen_live_wrapper"><a href="https://audioboo.fm/publishing/playlist/v2?autoplay=false&boo_content_type=list&data_for_content_type=%2Fapi%2Fusers%2F44829%2Faudio_clips&src=%2Fapi%2Fusers%2F44829%2Faudio_clips&player_theme=light&link_color=%23004A97&image_option=small&show_title=true" target="_blank"><?php print render($page['listen_live']);?></a></div>
				<div class="listen_live_wrapper"><a href="https://audioboo.fm/publishing/playlist/v2?autoplay=false&boo_content_type=list&data_for_content_type=%2Fapi%2Fusers%2F44829%2Faudio_clips&src=%2Fapi%2Fusers%2F44829%2Faudio_clips&player_theme=light&link_color=%23004A97&image_option=small&show_title=true" target="_blank"><?php print render($page['listen_again']);?><!--<div class="listen_again"></div>--></a></div>
				<div class="apps_wrapper"><?php print render($page['apps']);?><!--<div class="apps"></div>--></div>
			</div><!-- col-md-2 Ends-->
		</div><!-- Main row Ends -->	
	
		<!-- Slideshow Starts -->
		<div class="row">
			<div class="col-ie-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding top_margin15"><!-- col-md-12 Starts-->
				<div class="col-ie-6 col-sm-12 col-xs-12 col-md-6 col-lg-6 no_padding">
					<div class="map1">
					<a href="https://maps.google.com/?ie=UTF8&ll=25.189049,55.254673&spn=0.015378,0.022724&t=m&z=16&vpsrc=6&iwloc=A&q=Gulf+
News+Broadcasting&cid=8850665314556414596" target="_blank">
						<img src="/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/map_dubai.png">
					</a>	
					</div>
				</div>
				<div class="col-ie-6 col-sm-12 col-xs-12 col-md-6 col-lg-6 no_padding">
					<div class="map2">
					<a href="https://maps.google.com/maps/ms?
msa=0&msid=208303175367058508326.0004f0de699f4b2071dc0&ie=UTF8&ll=24.419154,54.43832
9&spn=0.015474,0.022724&t=m&z=16&vpsrc=6&iwloc=0004f0de69a175915cb2e" target="_blank">
						<img src="/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/map_abudhabi.png">	
					</a>	
					</div>
				</div>
			</div><!-- col-md-12 Ends-->	
		</div>
		<!-- Slideshow Ends -->

	
	
	
	
		<div class="row"><!-- Main row Starts-->
			<div class="col-ie-8 col-sm-12 col-md-8 white"><!-- col-md-8 Starts--> 
			
			<!-- 8 column Stuufs -->	
			
			<!--Radio2 TV Starts -->
			<div class="row"><!-- row Starts For Heading-->
					<div class="col-ie-12 col-md-12 lime_yellow_color">
						<div class="content_title">CONTACT US</div>
					</div>
			</div><!-- row Ends For Heading-->
			<!--Radio2 TV Ends -->
			<!-- Form Starts -->
					<div class="page-content-contactus-form">

                    <form name="contactus" action="sites/all/themes/bootstrap/bootstrap_subtheme/templates/send_mail.php" method="post">

                   

						<div class="contact_field_name">Name</div><div class="contact_field_description">

                        <input class="c_input" type="text" name="c_name" required/></div> 

                        <div class="contact_field_name">Email</div><div class="contact_field_description">

                        <input class="c_input" type="text" name="c_email" required /></div> 

                        <div class="contact_field_name">Subject</div><div class="contact_field_description">

                        <input class="c_input" type="text" name="c_subject" required /></div> 

                        <div class="contact_field_name">Message</div><div class="contact_field_description">

                        <textarea class="c_input_txtarea" name="c_message" ></textarea></div> 

                        <div class="contact_field_button">

                        	<input type="reset" class="imgClass_reset" name="reset" value="" />

                        	<input type="submit" class="imgClass_send" name="send" value="" />

                        </div>    

                    </form>                    

					</div>

			<!-- Form Ends-->			
			
			
			
			<!-- 8 column Stuufs Ends-->
				
			</div><!-- col-md-8 Ends--> 
			
			
			
			
			<!-- 4 column Start  -->			
			
			
			<div class="col-ie-4 col-sm-12 col-xs-12 col-md-4 col-lg-4 facebook_right no_padding"><!-- col-md-4 Starts--> 
				<!-- Social Tab Starts-->
				<div id="tabContainer">
					<div id="tabs">
					  <ul>
						<li id="tabHeader_1">Facebook</li>
						<li id="tabHeader_2">Twitter</li>
						<li id="tabHeader_3">Instagram</li>
					  </ul>
					</div>
					<div id="tabscontent">
					  <div class="tabpage" id="tabpage_1">
				<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio2UAE&amp;width=240&amp;height=375&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=674151015978019" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:375px;" allowTransparency="true"></iframe>
					  </div>
					  
					  <div class="tabpage" id="tabpage_2">
				<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio1UAE&amp;width=240&amp;height=375&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=674151015978019" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:375px;" allowTransparency="true"></iframe>
					  </div>
					  
					 <div class="tabpage" id="tabpage_3">
				<iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio2UAE&amp;width=240&amp;height=375&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=674151015978019" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:375px;" allowTransparency="true"></iframe>
					</div>
				   </div>
				</div>
				<!-- Social Tab Ends-->
			</div><!-- col-md-4 Ends-->
			 	
			<div class="col-ie-4 col-sm-12 col-xs-12 col-md-4 advertisement_right"><!-- col-md-4 Starts--> 
				<?php print render($page['first_Ad_right']);?>	
			</div><!-- col-md-4 Ends-->
		

			

			

			
			
			<div class="col-ie-4 col-sm-12 col-md-4 second_Ad_right no_padding"><!-- col-md-4 Starts--> 
				<?php print render($page['second_Ad_right']);?>	
			</div><!-- col-md-4 Ends-->
			
			
			

			

			<!-- 4 column Ends  -->		
			
			
			
			
			
		</div>	<!-- Main row Ends-->
		

		
	</div><!-- Main container Ends--> 	
</div> <!-- Main Wrapper Ends-->	
	<!-- Sub Footer Starts -->
		
	<div class="f_wrapper">
		 <div class="container radio2-container">
         <div class="row">
					<div class="col-ie-5 col-sm-12 col-md-5 col-lg-5 subfooter_subtwo">
					<div class="footer_subscription_text">Subscribe to our Newsletter</div>
						<?php print render($page['footer_top_first']);?>
					<div class="footer_subscription_text"> 
						<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/gnbroadcasting.png">
					</div>
					<div class="radio2_footer_wrapper">
						<div class="col-md-3 col-ie-3 col-sm-12 radio2_footer_icon">
							<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/radio2icon.png">
						</div>
					</div>
					<div class="col-md-3 col-ie-3 col-sm-12 radio1icon_footer">
						<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/radi1icon.png">
						<div class="humicon_footer"><img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/humicon.png"></div>	
					</div>
					
					<div class="col-md-3 col-ie-3 col-sm-12 joshicon_footer">
						<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/joshicon.png">
						<div class="smoothicon_footer"><img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/smoothicon.png"></div>	
					</div>	
					<div class="col-md-3 col-ie-3 col-sm-12 ">
						<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/hayathicon.png">
						<div class="radio2rockicon_footer"><img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/radio2rockicon.png"></div>	
					</div>	
					</div>
					
					
					
					
					
					<div class="col-ie-4 col-sm-12 col-md-4 col-lg-4 subfooter_subone ">
					<div class="footer_subscription_text">Other links</div>
						<div class="footer_link">
							<a href="#">Home</a>
							<a href="#">Shows</a>
							<a href="#">Music</a>
							<a href="#">News</a>
							<a href="#">Win</a>
						</div>
					<div class="footer_subscription_text useful_links">Useful links</div>
						<?php print render($page['footer_top_second']);?>
							<div class="col-md-5 col-ie-5 no_padding footer_links_middle">
								<div>
									<a href="#">Contact us</a>
								</div>
								<div>
									<a href="#">Terms of Use</a>
								</div>
								<div>
									<a href="#">About Radio 2</a>
								</div>
							</div>
							<div class="col-md-7 col-ie-7 footer_links_middle">
								<div>
									<a href="#">Privacy Policy</a>
								</div>
								<div>
									<a href="#">Advertising</a>
								</div>
							</div>
					</div>
					<div class="col-ie-3 col-sm-12 col-md-3 col-lg-3 subfooter_subthree">
					<div class="footer_subscription_text">Get Social</div>
						<div class="col-ie-3 col-md-3">
							ico1
						</div>
						<div class="col-ie-3 col-md-3 no_padding">
							ico2
						</div>
						<div class="col-ie-3 col-md-3 no_padding">
							ico3
						</div>
						<div class="col-ie-3 col-md-3 no_padding">
							ico4
						</div>
						
						<?php print render($page['footer_top_third']);?>
						<div class="col-md-4 col-ie-4">	
						<div class="footer_link_calln_sms">
							<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/footer_link_call.png">
						</div>
						</div>
						<div class="col-md-8 col-ie-8 call_here no_padding">	
						Send "Win"
						</div>
						<div class="call_here_bottom">
						5180
						</div>
						<div class="col-md-12 col-ie-12 call_here">
							<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/footer_link_call.png">Call Us !
						</div>
					</div>
					
         </div>
         </div>
		<!-- Footer Starts --> 
		<div class="main_footer">
			<div class="container radio2-container_footer ">
				<div class="col-ie-12 col-sm-12 col-md-12 col-lg-12" style="color:white;">Copyright GN Broadcasting</div>
			</div>
		</div>  
		<!-- Footer Ends --> 
    </div>    
	<!-- Sub Footer Ends -->

	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="sites/all/themes/bootstrap/bootstrap_subtheme/js/vendor/bootstrap.min.js"></script>

        <script src="sites/all/themes/bootstrap/bootstrap_subtheme/js/main.js"></script>
		<!-- Slideshow Scripts Starts-->
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/slideshow/jssor.core.js"></script>
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/slideshow/jssor.utils.js"></script>
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/slideshow/js/jssor.slider.js"></script>
		
		<!-- Slideshow Scripts Ends-->
		
		<!-- Social Tabs Scripts Starts-->
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/social_tabs/tabs.js"></script>
		<!-- Social Tabs Scripts Ends-->
		

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
	
		
  </body>
</html>