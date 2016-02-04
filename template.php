<?php

function velociraptor_css_alter(&$css) {
  //dsm($css);
  unset($css[drupal_get_path('module','system').'/system.menus.css']);
  unset($css[drupal_get_path('module','system').'/system.theme.css']);
}

function velociraptor_preprocess_html(&$vars) {
  //dsm($vars);

  //to add a Google Fonts stylesheet - replace the URL
  //drupal_add_css('http://fonts.googleapis.com/css?family=News+Cycle', array('type' => 'external'));

  //removes less than helpful no-sidebars class that is hard coded into drupal
  $vars['classes_array'][3] = '';

  //adding theme-specific sidebar indicator class if needed
  //replace with the name of your sidebar region and un-comment if needed
  // if (!empty($vars['page']['sidebar'])) {
  //   $vars['classes_array'][] = 'has-sidebar';
  // }
  // else {
  //   $vars['classes_array'][] = 'no-sidebar';
  // }
}

function velociraptor_preprocess_page(&$vars) {
  // Adds page template suggestion based on node type.
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }

}

function velociraptor_preprocess_node(&$vars) {
  //dsm($vars);
}

function velociraptor_preprocess_region(&$vars) {
  //dsm($vars);
}

function velociraptor_preprocess_block(&$vars) {
  //dsm($vars);
}
