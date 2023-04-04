<?php
 function olmbr_enqueue_scripts(){
  wp_register_style(
    'olmbr_rateit',
    plugins_url('/assets/rateit/rateit.css', RECEITA_PLUGIN_URL)
  );
  wp_register_script(
    'olmbr_rateit',
    plugins_url('/assets/rateit/jquery.rateit.min.js', RECEITA_PLUGIN_URL),
    array('jquery'),
    '1.0',
    true
  );
  wp_register_script(
    'olmbr_script',
    plugins_url('/assets/js/script.js', RECEITA_PLUGIN_URL),
    array('jquery'),
    '1.0',
    true
  );

  wp_localize_script('olmbr_script', 'receita_obj', array(
    'ajax_url'  =>  admin_url('admin-ajax.php')
  ));

  wp_enqueue_style('olmbr_rateit');
  wp_enqueue_script('olmbr_rateit');
  wp_enqueue_script('olmbr_script');
 }