<?php

function oc_theme_path() {
  return base_path().path_to_theme();
}


function opencharity_preprocess_page(&$variables) {
  $variables['image_path'] = $image_path = oc_theme_path().'/assets/images';
  $variables['logo'] = $image_path.'/oc-logo.png';

  // Social Links
  $variables['facebook_url'] = '//www.facebook.com/christian.ezeani.cyb';
  $variables['twitter_url'] = '//www.twitter.com/ChristianEzeani';
  $variables['google_url'] = '//www.google.com/ChristianEzeani';
}

?>