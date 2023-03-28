<?php
  include 'metabox_olmbr_receita_opcoes.php';

  function olmbr_receitas_admin_init(){
    add_action('add_meta_boxes_receita', 'olmbr_receitas_metaboxes');
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