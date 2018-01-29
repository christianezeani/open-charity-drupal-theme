<?php

function opencharity_form_system_theme_settings_alter(&$form, $form_state) {
  $form['opencharity'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('OpenCharity Theme Settings'),
    '#weight' => -2
  );

  $form['opencharity']['opencharity_banner'] = array(
    '#type'          => 'file',
    '#title'         => t('Banner Image'),
    '#default_value' => theme_get_setting('opencharity_banner'),
    '#description'   => t("Changes the banner image on the homepage.")
  );

  $form['opencharity']['opencharity_join_us'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Join Us Link'),
    '#default_value' => theme_get_setting('opencharity_join_us'),
    '#description'   => t("Sets the \"Join Us\" link on the header")
  );

}

?>