<?php

function oc_theme_path() {
  return base_path().path_to_theme();
}


function opencharity_preprocess_page(&$variables) {
  $variables['image_path'] = $image_path = oc_theme_path().'/assets/images';
  $variables['logo'] = $image_path.'/oc-logo.png';

  // Social Links
  $social = array();

  if ($facebook = theme_get_setting('opencharity_social_facebook')) {
    $social[] = array(
      'icon' => 'fa-facebook',
      'url' => $facebook
    );
  }

  if ($twitter = theme_get_setting('opencharity_social_twitter')) {
    $social[] = array(
      'icon' => 'fa-twitter',
      'url' => $twitter
    );
  }

  if ($google = theme_get_setting('opencharity_social_google')) {
    $social[] = array(
      'icon' => 'fa-google-plus',
      'url' => $google
    );
  }

  $variables['social'] = (count($social)) ? $social : null;
}

?>