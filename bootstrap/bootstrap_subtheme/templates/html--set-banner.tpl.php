<?php
if($_POST['SET_BANNER']){
	date_default_timezone_set('Asia/Dubai'); 
	$timehour=date('H');
  	$timehour = $timehour + 1;//echo $timehour;
	$date=date('l');
	$nodes = node_load_multiple(array(), array('type' => $date ));	
	$ImageUrl='';
	switch($date){
		case 'Sunday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_sunday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_sunday["und"][0]["value"];
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_sunday["und"][0]["uri"]); 
							break;
	
							}
							
	
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
						break;
		case 'Monday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_monday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_monday["und"][0]["value"];
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; } 
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_monday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
		case 'Tuesday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_tuesday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_tuesday["und"][0]["value"]; 
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_tuesday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
		case 'Wednesday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_wednesday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_wednesday["und"][0]["value"]; 
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_wednesday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
		case 'Thursday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_thursday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_thursday["und"][0]["value"]; 
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_thursday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
		case 'Friday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_friday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_friday["und"][0]["value"]; 
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_friday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
		case 'Saturday':
						foreach ($nodes as $node){
							$PERIOD_FROM = $node->field_period_from_saturday["und"][0]["value"]; 
							$PERIOD_TO = $node->field_period_to_saturday["und"][0]["value"]; 
							if($PERIOD_TO == 0) { $PERIOD_TO = 24; }
							if($PERIOD_FROM < $timehour && $PERIOD_TO >= $timehour){
							echo $ImageUrl = file_create_url($node->field_banner_image_saturday["und"][0]["uri"]); 
							break;
	
							}
							
						}
						if($ImageUrl==''){echo "/sites/all/themes/bootstrap/bootstrap_subtheme/img/content/large/generic-big.png";}
				break;
	}



}
?>
