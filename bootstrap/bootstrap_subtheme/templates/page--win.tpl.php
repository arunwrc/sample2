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
          <a class="navbar-brand" href="#"><img class="home" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"> </a>
        </div>
        <div class="navbar-collapse collapse">
		 <ul class="nav navbar-nav">
			<li class="active"><a href="#">SHOWS</a></li>
			<li><a href="#">MUSIC</a></li>
			<li><a href="#">EVENTS</a></li>
			<li><a href="#">WIN</a></li>
			<li><a href="#">CONTACT</a></li>
			<li><a href="#">RADIO2 TV</a></li>
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
				<div class="apps_wrapper">
				<div class="app_text_wrapper">
				Listen on the move
				</div>
				<?php //print render($page['apps']);?><!--<div class="apps"></div>-->
				<a href="https://itunes.apple.com/us/app/radio-2/id703323007?mt=8" target="_blank"><img class="ios_app" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
				<a href="https://play.google.com/store/apps/details?id=com.streamtheworld.gulfnews&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5zdHJlYW10aGV3b3JsZC5ndWxmbmV3cyJd" target="_blank"><img class="android_app" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
				<a href="http://www.windowsphone.com/en-us/store/app/radio-2/0168f6a0-e981-4052-9894-4d61787b1289" target="_blank"><img class="windows_app" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
				<a href="http://appworld.blackberry.com/webstore/content/125076/?lang=en" target="_blank"><img class="bb_app" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
				</div>
			</div><!-- col-md-2 Ends-->
		</div><!-- Main row Ends -->	

		<!-- Slideshow Starts -->
		<div class="row"><!-- Row Starts -->
			<div class="col-ie-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 no_padding top_margin15 win_banner_holder"><!-- col-md-12 Starts-->
				<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/win_banner.png">
			</div><!-- col-md-12 Ends-->	
		</div><!-- Row Ends -->
		<!-- Slideshow Ends -->
		<!-- Breadcrumb Starts -->
		<div class="row"><!-- Row Starts -->
			<div class="col-lg-12 col-md-12 col-ie-12 col-sm-12 col-xs-12 contact_breadcrumb">
				<a href="index.php">HOME</a> <span class="contact_breadcrumb_link">&nbsp;&nbsp;>&nbsp;&nbsp;WIN</span>
			</div>
		</div><!-- Row Ends -->
		<!-- Breadcrumb Ends -->
	
	
	
	
		<div class="row"><!-- Main row Starts-->
			<div class="col-ie-8 col-sm-12 col-md-8 white"><!-- col-md-8 Starts--> 
			
			<!-- 8 column Stuufs -->	
			
			<!--Radio2 TV Starts -->
			<div class="row"><!-- row Starts For Heading-->
			<!-- TABS STARTS-->
			<!-- -->
			<div class='tabs tabs_default winpage_tab_header'>
					<ul class='horizontal'>
						<li><a href="#tab-1">COMPETITIONS</a></li>
						<li><a href="#tab-2">WINNERS</a></li>
					</ul>
					<div id='tab-1'><?php print render($page['add_competitions']);?></div>
					<div id='tab-2'><?php print render($page['add_winners']);?></div>
			</div>
			<!-- -->

			<!-- TABS ENDS-->

			</div><!-- row Ends For Heading-->
			<!--Radio2 TV Ends -->
			<!-- Form Starts -->
			<!-- Form Ends-->			
			<!-- 8 column Stuufs Ends-->
				
			</div><!-- col-md-8 Ends--> 
			
			
			
			
			<!-- 4 column Start  -->			
			
			
			<div class="col-ie-4 col-sm-12 col-xs-12 col-md-4 col-lg-4 facebook_right no_padding"><!-- col-md-4 Starts--> 
				<!-- Social Tab Starts-->
				<div id="tabContainer">
					<div id="tabs">
					  <ul>
						<li style="background-color:#FFF;" id="tabHeader_1" class="tab1"><img class="facebook" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></li>
						<li id="tabHeader_2" class="tab2"><img class="twitter" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></li>
						<li id="tabHeader_3" class="tab3"><img class="instagram" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></li>
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
				
						<img class="gnblogo-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
					</div>
					<div class="radio2_footer_wrapper">
						<div class="col-md-3 col-ie-3 col-sm-12 radio2_footer_icon">	
							<img class="gnb-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
						</div>
					</div>
					<div class="col-md-3 col-ie-3 col-sm-12 radio1icon_footer">
						<a href="https://www.facebook.com/Radio1UAE" target="_blank"><img class="radio1-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
						<a href="http://www.humfm.com/hum/" target="_blank"><img class="hum-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
					</div>
					
					<div class="col-md-3 col-ie-3 col-sm-12 joshicon_footer">
						<a href="http://joshfm.ae/" target="_blank"><img class="josh-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
					<a href="https://www.facebook.com/SmoothRadioMiddleEast" target="_blank"><img class="smooth-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
					</div>	
					<div class="col-md-3 col-ie-3 col-sm-12 hayathicon_footer">
						<a href="http://www.hayatfm.ae/" target="_blank"><img class="hayath-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
						<a href="https://www.facebook.com/Radio2RockUAE" target="_blank"><img class="radio2rock-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif"></a>
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
								<div class="footer_contact">
									<a href="#">Contact us</a>
								</div>
								<div class="footer_terms-n-conditions">
									<a href="#">Terms of Use</a>
								</div>
								<div class="footer_about_radio2">
									<a href="#">About Radio 2</a>
								</div>
							</div>
							<div class="col-md-7 col-ie-7 footer_links_middle">
								<div class="footer_privacy_policy">
									<a href="#">Privacy Policy</a>
								</div>
								<div class="footer_advertising">
									<a href="#">Advertising</a>
								</div>
							</div>
					</div>
					<div class="col-ie-3 col-sm-12 col-md-3 col-lg-3 subfooter_subthree">
					<div class="footer_subscription_text">Get Social</div>
						<div class="col-ie-3 col-md-3">
							<a href="https://www.facebook.com/Radio2UAE" target="_blank">
							<img class="facebook-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
							</a>
						</div>
						<div class="col-ie-3 col-md-3">
							<a href="http://www.youtube.com/user/Radio1UAE" target="_blank">
							<img class="youtube-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
							</a>
						</div>
						<div class="col-ie-3 col-md-3">
							<a href="https://twitter.com/Radio1UAE" target="_blank">
							<img class="twitter-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
							</a>	
						</div>
						<div class="col-ie-3 col-md-3">
							<a href="https://soundcloud.com/Radio1UAE" target="_blank">
							<img class="sound-cloud-footer-logo" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/img_trans.gif">
							</a>
						</div>
						
						<?php print render($page['footer_top_third']);?>
						<div class="footer_third"><!--- footer third starts -->
						<div class="col-md-4 col-ie-4">	
						<div class="footer_link_calln_sms no_padding">
							<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/footer_link_call.png">
						</div>
						</div>
						<div class="col-md-8 col-ie-8 call_here no_padding">	
						<a href="sms:5170">Send "Win"</a>
						</div>
						<div class="call_here_bottom no_padding">
						<a href="sms:5170">5180</a>
						</div>
						<div class="col-md-12 col-ie-12 call_here">
							<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/footer_link_call.png"><a href="tel: 800723461">Call Us !</a>
						</div>
						
					</div></div><!-- footer third ends -->
					
         </div>
         </div>
		<!-- Footer Starts --> 
		<div class="main_footer">
			<div class="container radio2-container_footer">
				<div class="col-ie-12 col-sm-12 col-md-12 col-lg-12 footer_text" style="color:white;">GN Broadcasting 2014 All rights reserved</div>
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
		
		<!-- JS FOR WINPAGE TAB STARTS-->
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/winpage_tab/waypoints.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/winpage_tab/waypoints-sticky.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/winpage_tab/jquery.tabslet.min.js"></script>
		<script type="text/javascript" src="sites/all/themes/bootstrap/bootstrap_subtheme/js/winpage_tab/rainbow-custom.min.js"></script>
		<script src="sites/all/themes/bootstrap/bootstrap_subtheme/js/winpage_tab/initializers.js"></script>
		<!-- JS FOR WINPAGE TAB ENDS-->
		

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