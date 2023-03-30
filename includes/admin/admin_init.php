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