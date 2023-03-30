<?php
  include 'metabox_olmbr_receita_opcoes.php';
  include 'enqueue.php';

  function olmbr_receitas_admin_init(){
    add_action('add_meta_boxes_receita', 'olmbr_receitas_metaboxes');
    add_action('admin_enqueue_scripts', 'olmbr_admin_enqueue');
  }

  function olmbr_receitas_metaboxes(){
    add_meta_box(
      'olmbr_receita_opcoes',
      __('Opções da receita'),
      'olmbr_receita_opcoes',
      'receita',
      'normal',
      'high'
    );
  }

  function olmbr_save_post_admin($post_id, $post, $update){
    if(!$update){
      return;
    }
    $receita_data = array(
      'ingredientes'      =>      $_POST['olmbr_ingredientes'],
      'tempo'             =>      $_POST['olmbr_tempo'],
      'utensilios'        =>      $_POST['olmbr_utensilios'],
      'dificuldade'       =>      $_POST['olmbr_dificuldade'],
      'tipo'              =>      $_POST['olmbr_tipo']
    );

    update_post_meta($post_id, 'receita_data', $receita_data);
    
  }