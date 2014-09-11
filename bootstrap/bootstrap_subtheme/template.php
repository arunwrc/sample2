<?php


/**/
function bootstrap_subtheme_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'sidebar_first') {
    if (($key = array_search('well', $variables['classes_array'])) !== FALSE) {
      unset($variables['classes_array'][$key]);
    }
  }
}

?>
