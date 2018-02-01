<?php

function opencharity_form_system_theme_settings_alter(&$form, $form_state) {
  // BEGIN: Social Links
  $form['opencharity_social'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('OpenCharity Social Links'),
    '#weight' => -2
  );

  $form['opencharity_social']['opencharity_social_facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#default_value' => theme_get_setting('opencharity_social_facebook'),
    '#description'   => t("Sets the Facebook Url")
  );

  $form['opencharity_social']['opencharity_social_twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#default_value' => theme_get_setting('opencharity_social_twitter'),
    '#description'   => t("Sets the Twitter Url")
  );

  $form['opencharity_social']['opencharity_social_google'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Google+ Url'),
    '#default_value' => theme_get_setting('opencharity_social_google'),
    '#description'   => t("Sets the Google+ Url")
  );
  // END: Social Links

}

?>