<?php


/**/
function bootstrap_subtheme_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'sidebar_first') {
    if (($key = array_search('well', $variables['classes_array'])) !== FALSE) {
      unset($variables['classes_array'][$key]);
    }
  }
}


function bootstrap_theme(&$existing, $type, $theme, $path) {
  bootstrap_include($theme, 'theme/registry.inc');
  return _bootstrap_theme($existing, $type, $theme, $path);
}
function bootstrap_subtheme_preprocess_region(&$variables, $hook) {
  if ($variables['region'] == 'sidebar_first') {
    if (($key = array_search('well', $variables['classes_array'])) !== FALSE) {
      unset($variables['classes_array'][$key]);
    }
  }
}
function bootstrap_theme_preprocess_node(&$vars) {
  
  // Add css class "node--NODETYPE--VIEWMODE" to nodes
  $vars['classes_array'][] = 'node--' . $vars['type'] . '--' . $vars['view_mode'];
  
  // Make "node--NODETYPE--VIEWMODE.tpl.php" templates available for nodes 
  $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__' . $vars['view_mode'];
}
function bootstrap_preprocess_page(&$vars, $hook) {
 if (isset($vars['node']->type)) {
   // If the content type's machine name is "my_machine_name" the file
   // name will be "page--my-machine-name.tpl.php".
   $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
 }
}

?>
