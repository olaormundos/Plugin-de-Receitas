<?php 
 function olmbr_voto_receita(){

  global $wpdb;

  $array = array(
    'status'  =>  0
  );
  
  $post_id = absint($_POST['id']);
  $voto    = floatval($_POST['voto']);
  $ip      = $_SERVER['REMOTE_ADDR'];

  $qt = $wpdb->get_var("SELECT COUNT(*) FROM ".$wpdb->prefix."receitas_votos WHERE receita_id = ".$post_id." AND user_ip = '".$ip."'");
  if($qt > 0){
    wp_send_json($array);
  }

  $wpdb->insert(
    $wpdb->prefix.'receitas_votos',
    array(
      'receita_id'  =>  $post_id,
      'voto'        =>  $voto,
      'user_ip'     =>  $ip
    )
  );

  $receita_data = get_post_meta($post_id, 'receita_data', true);
  $receita_data['contagem']++;
  $receita_data['media'] = $wpdb->get_var("SELECT AVG(voto) FROM ".$wpdb->prefix."receitas_votos WHERE receita_id = ".$post_id."");

  update_post_meta($post_id, 'receita_data', $receita_data);

  $array['status'] =1;

  wp_send_json($array);

 }