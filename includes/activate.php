<?php
  function olmbr_activate_plugin(){
    if(version_compare(get_bloginf('version'), '4.5', '<')){
      wp_die(__('Você precisa atualizar o WordPress para usar este plugin. Ele requer a versão 4.5 ou superior', 'receitas'));
    }
  }