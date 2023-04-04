<?php
  function olmbr_activate_plugin(){

    /* Verifica a versão do wordpress */
    if(version_compare(get_bloginfo('version'), '4.5', '<')){
      wp_die(__('Você precisa atualizar o WordPress para usar este plugin. Ele requer a versão 4.5 ou superior', 'receitas'));
    }

    /* Cria as tabelas no banco de dados ao ativar */
    global $wpdb;

    $sql = "CREATE TABLE ".$wpdb->prefix."receitas_votos(
      ID BIGINT(20) NOT NULL AUTO_INCREMENT,
      receita_id BIGINT(20) NOT NULL,
      voto TINYINT(1) NOT NULL,
      user_ip VARCHAR(32) NOT NULL,
      PRIMARY KEY(ID)
    ) ".$wpdb->get_charset_collate();

    require_once(ABSPATH.'/wp-admin/includes/upgrade.php');
    dbDelta($sql);

  }