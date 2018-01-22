<?php

function opencharity_form_system_theme_settings_alter(&$form, $form_state) {
  
  $form['opencharity_banner'] = array(
    '#type'          => 'file',
    '#title'         => t('Banner Image'),
    '#default_value' => theme_get_setting('opencharity_banner'),
    '#description'   => t("Changes the banner image on the homepage."),
    '#weight' => -2
  );

}

?>