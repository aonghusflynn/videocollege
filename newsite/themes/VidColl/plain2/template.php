<?php
// $Id: template.php,v 1.1 2006/07/13 06:49:02 Gurpartap Exp $

function plain2_regions() {
  return array(
       'header' => t('header'),
       'left' => t('left sidebar'),
       'content' => t('content'),
       'footer' => t('footer')
  );
}

function phptemplate_search_theme_form($form) {
  return _phptemplate_callback('search-box', array('form' => $form));
}

function plain2_primary_links() {
  $links = menu_primary_links();
  if ($links) {
    $output .= '<ul id="nav">';
    foreach ($links as $link) {

      $output .= '<li>' . $link . '</li>';
    }; 
    $output .= '</ul>';
  }
  return $output;
}

function plain2_secondary_links() {
  $links = menu_secondary_links();
  if ($links) {
    $output .= '<ul>';
    foreach ($links as $link) {

      $output .= '<li class="secnav">' . $link . '</li>';
    }; 
    $output .= '</ul>';
  }
  return $output;
}