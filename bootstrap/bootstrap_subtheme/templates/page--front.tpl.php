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
				<!-- Third Party Slideshow Begin -->
				    <!-- Jssor Slider Begin -->
						<!-- You can move inline styles to css file or css block. -->
						    <script>

							jQuery(document).ready(function ($) {
								var options = {
									$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
									$AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
									$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
									$PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
					
									$ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
									$SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
									$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
									//$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
									//$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
									$SlideSpacing: 5, 					                //[Optional] Space between each slide in pixels, default value is 0
									$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
									$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
									$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
									$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
									$DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
					
									$ThumbnailNavigatorOptions: {
										$Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
										$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
					
										$Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
										$AutoCenter: 3,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
										$Lanes: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
										$SpacingX: 4,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
										$SpacingY: 1,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
										$DisplayPieces: 4,                              //[Optional] Number of pieces to display, default value is 1
										$ParkingPosition: 0,                            //[Optional] The offset position to park thumbnail
										$Orientation: 2,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
										$DisableDrag: false                             //[Optional] Disable drag or not, default value is false
									}
								};
					
								var jssor_slider1 = new $JssorSlider$("slider1_container", options);
					
								//responsive code begin
								//you can remove responsive code if you don't want the slider scales while window resizes
								function ScaleSlider() {
									var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
									if (parentWidth) {
										var sliderWidth = parentWidth;
					
										//keep the slider width no more than 810 959
										sliderWidth = Math.min(sliderWidth, 959);
					
										jssor_slider1.$SetScaleWidth(sliderWidth);
									}
									else
										window.setTimeout(ScaleSlider, 50);
								}
					
								ScaleSlider();
					
								if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
									$(window).bind('resize', ScaleSlider);
								}
					
					
								//if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
								//    $(window).bind("orientationchange", ScaleSlider);
								//}
								//responsive code end
							});
						</script>

						<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 810px; height: 300px; background: #FFF; overflow: hidden; ">
					
							<!-- Loading Screen -->
							<div u="loading" style="position: absolute; top: 0px; left: 0px;">
								<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
									background-color: #fff; top: 0px; left: 0px;width: 100%;height:100%;">
								</div>
								<div style="position: absolute; display: block; background: url(sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/slideshow_images/loading.gif) no-repeat center center;
								left: 0px;width: 100%;height:100%;">
								</div>
							</div>
							<!-- Slides Container -->
							<div u="slides" class="wid" style="cursor: move; position: absolute;  height: 300px;
								overflow: hidden;">
								
								<?php 
									    $slides = node_load_multiple(array(), array('type' => 'slide_show','status' => '1'));
									   foreach($slides as $slide):
								?>
								<div>
								<img u="image" src="<?php print file_create_url($slide->field_slideshow_image['und'][0]['uri']); ?>" />
									   <div u="thumb">
											   <img class="i" src="<?php print file_create_url($slide->field_slideshow_image['und'][0]['uri']); ?>" /><div class="t"><?php print $slide->title; ?></div>
											  
									   </div>
								</div>
													   
								<?php endforeach; ?>
								<!-- -->
								<!--<div>
									<img u="image" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/slideshow_images/002.jpg" />
									<div u="thumb">
										<img class="i" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/slideshow_images/thumbs/thumb-002.jpg" /><div class="t">Banner Rotator</div>
										<div class="c">360+ touch swipe slideshow effects</div>
									</div>
								</div>
								<div>
									<img u="image" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/slideshow_images/003.jpg" />
									<div u="thumb">
										<img class="i" src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/slideshow_images/thumbs/thumb-003.jpg" /><div class="t">Image Gallery</div>
										<div class="c">Image gallery with thumbnail navigation</div>
									</div>
								</div>-->

								<!-- -->
								
								
								
							</div>
							
							<!-- ThumbnailNavigator Skin Begin -->
							<div u="thumbnavigator" class="jssort11" style="position: absolute; width: 230px; height: 300px; left:561px; top:-1px;">
								<!-- Thumbnail Item Skin Begin -->
								<style>
									/* jssor slider thumbnail navigator skin 11 css */
									/*
									.jssort11 .p            (normal)
									.jssort11 .p:hover      (normal mouseover)
									.jssort11 .pav          (active)
									.jssort11 .pav:hover    (active mouseover)
									.jssort11 .pdn          (mousedown)
									*/
									.jssort11
									{
										font-family: Arial, Helvetica, sans-serif;
									}
									.jssort11 .i, .jssort11 .pav:hover .i
									{
										position: absolute;
										top:0;
										left:0;
										WIDTH: 271px;
										HEIGHT: 153px;
										
									}
									* html .jssort11 .i
									{
										WIDTH /**/: 62px;
										HEIGHT /**/: 32px;
									}
									.jssort11 .pav .i
									{
										border: white 1px solid;
									}
									.jssort11 .t, .jssort11 .pav:hover .t
									{
										position: absolute;
										top: 3px;
										left: 20px;
										width:129px;
										height: 32px;
										line-height:32px;
										text-align: center;
										color:#fc9835;
										font-size:13px;
										font-weight:700;
									}
									.jssort11 .pav .t, .jssort11 .phv .t, .jssort11 .p:hover .t
									{
										color:#fff;
									}
									.jssort11 .c, .jssort11 .pav:hover .c
									{
										position: absolute;
										top: 38px;
										left: 3px;
										width:197px;
										height: 31px;
										line-height:31px;
										color:#fff;
										font-size:11px;
										font-weight:400;
										overflow: hidden;
									}
									.jssort11 .pav .c, .jssort11 .phv .c, .jssort11 .p:hover .c
									{
										color:#fc9835;
									}
									.jssort11 .t, .jssort11 .c
									{
										transition: color 2s;
										-moz-transition: color 2s;
										-webkit-transition: color 2s;
										-o-transition: color 2s;
									}
									.jssort11 .p:hover .t, .jssort11 .phv .t, .jssort11 .pav:hover .t, .jssort11 .p:hover .c, .jssort11 .phv .c, .jssort11 .pav:hover .c
									{
										transition: none;
										-moz-transition: none;
										-webkit-transition: none;
										-o-transition: none;
										
									}
									.jssort11 .p
									{
										background:#181818;
										
									}
									.jssort11 .pav, .jssort11 .pdn
									{
										background:#462300;
										
									}
									.jssort11 .p:hover, .jssort11 .phv, .jssort11 .pav:hover
									{
										background:#333;
										
									}
								</style>
								<div u="slides" style="cursor: move;">
									<div u="prototype" class="p" style="position: absolute; width: 271px; height: 153px; top: 3px; left: 0;">
										<thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate>
									</div>
								</div>
								<!-- Thumbnail Item Skin End -->
							</div>
							<!-- ThumbnailNavigator Skin End -->
							<a style="display: none" href="http://www.jssor.com">slideshow</a>
						</div>
						<!-- Jssor Slider End -->
				<!-- Third Party Slideshow Ends-->
			</div><!-- col-md-12 Ends-->	
		</div>
		<!-- Slideshow Ends -->

	
	
	
	
		<div class="row"><!-- Main row Starts-->
			<div class="col-ie-8 col-sm-12 col-md-8 white"><!-- col-md-8 Starts--> 
			
			<!-- 8 column Stuufs -->	
			
			<!--Radio2 TV Starts -->
			<div class="row"><!-- row Starts For Heading-->
					<div class="col-ie-12 col-md-12 lime_yellow_color">
						<div class="content_title">Radio2 TV</div>
					</div>
			</div><!-- row Ends For Heading-->
			<div class="row">
				<div class="col-ie-12 col-xs-6 col-sm-12 col-md-12">
					<div class="radio2_tv_first">
						<?php print render($page['radio2_tv']);?>
					</div>
					<!--<div class="video_description">
						Radio2 TVs
					</div>-->
				</div>
			</div>	
			<!--Radio2 TV Ends -->
			

			<!-- Tabloid Starts -->
			<div class="row"><!-- row Starts For Heading-->
				<div class="col-ie-10 col-sm-10 col-md-10 lightyellow">
					<img src="sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/tabloid.png"/>
				</div>
					<div class="col-ie-2 col-sm-2 col-md-2  lightyellow bold_letters"><a href="#">more</a></div>
			</div><!-- row Ends For Heading-->
			<div class="row"><!-- row Starts-->
					<div class="col-ie-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 padding_lt-rt_5 horizontal_seperator">
						<div class="col-md-12 col-ie-12 tabloid_1 padding_left_10"> <!-- Newly Added Starts -->
							<?php print render($page['tabloid_one']);?>	
						</div>	<!-- Newly Added Ends -->
						<div class="col-md-12"><div class="tabloid_one_contents"><!--Lorem Ipsum Dolar Sit 1--></div></div>
					</div>
			</div>  <!-- row end-->
			<!-- Tabloid Ends -->
			
			
			<!--Hot on Radio2 Starts -->
			<div class="row"><!-- row Starts For Heading-->
				<div class="col-ie-10 col-sm-10 col-md-10 lightyellowhot">
					<div class="content_title">Hot On Radio2</div>
				</div>
				<div class="col-ie-2 col-sm-2 col-md-2 lightyellowhot bold_letters">
					<div class="linkpadding"><a href="#">more</a></div>
				</div>
			</div><!-- row Ends For Heading-->
			<div class="row"><!-- row Starts-->
				<div class="col-ie-12 col-sm-12 col-md-12 whitecolor padding_left_10 horizontal_seperator "><!-- col-md-4 Starts-->
					<div class="hot_onradio_1">
						<?php print render($page['hot_on_radio_one']);?>
					</div>	
				<div class="hot_on_radio_contents">
					<!--Lorem Ipsum Dolor sit Hot on radio2 content goes here-->
				</div>
				<div class="hyperlink_container">
					<div class="more_hyperlink">
						<a href="#"></a>
					</div>
				</div>
				</div><!-- col-md-4 Ends-->
			</div><!-- row Ends-->
			<!--Hot on Radio2 Ends -->
			
			<!-- Music Starts-->
			
			<div class="row"><!-- row Starts For Heading-->

		
				<?php print render($page['music']);?>
				

			</div>
			<!-- Music Ends-->
			
			<!-- Contests Starts-->
			<div class="row"><!-- row Starts For Heading-->
					<div class="col-ie-10 col-sm-10  col-md-10 contest_header">
						<div class="content_title">Contests</div>
					</div>
					<div class="col-ie-2 col-sm-2 col-md-2 contest_header bold_letters">
						<div class="linkpadding">
							<a href="#">more</a>
						</div>
					</div>
			</div><!-- row Ends For Heading-->
			<!--<div class="row">
				<div class="col-ie-3 col-sm-12 col-md-3 lightgreencolor">
					<p>01</p>
				</div>
				
				<div class="col-ie-3 col-sm-12 col-md-3 lightgreenscolor">
					<p>01</p>
				</div>
				
				<div class="col-ie-3 col-sm-12 col-md-3 darkgreencolor">
					<p>01</p>
				</div>
				
				<div class="col-ie-3 col-sm-12 col-md-3 lightgreenscolor">
					<p>01</p>
				</div>
			</div>	-->
			<!-- Contest Ends-->

				<div class="row"><!-- row Starts-->
				<div class="col-ie-12 col-sm-12 col-md-12   padding_left_10 horizontal_seperator"><!-- col-md-4 Starts-->
					<div class="contest_first">
						<?php print render($page['contests_first']);?>
					  <!--<h2>Contest 1</h2>
						<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis euismod semper</p>-->
					</div>	
				</div><!-- col-md-4 Ends-->
				</div><!-- row Ends-->	
			
			
			
			
			
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
		
			<div class="col-ie-4 col-sm-12 col-md-4 photos_right_header">
			<h2>Photos</h2>
			</div>
			
			<!-- Photos Start -->
			<div class="col-ie-4 col-sm-12 col-md-4 photo_border_bottom"><!-- col-md-4 Starts--> 
				<div class="col-ie-12 col-md-12 col-sm-12 col-xs-12 no_padding photo_margin_bottom"><?php print render($page['photos']);?>	</div>	
			</div><!-- col-md-4 Ends-->
			<!-- Photos Ends -->
			

			
			
			<div class="col-ie-4 col-sm-12 col-md-4 second_Ad_right no_padding"><!-- col-md-4 Starts--> 
				<?php print render($page['second_Ad_right']);?>	
			</div><!-- col-md-4 Ends-->
			
			
			
			<div class="col-ie-4 col-sm-12 col-xs-12 col-md-4 col-lg-4 weather_right_header">
				<h2>Weather</h2>			
			</div>
			<div class="col-ie-4 col-sm-12 col-xs-12 col-md-4 col-lg-4 weather_right no_padding"><!-- col-md-4 Starts--> 
				
				<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/50448839&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				
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