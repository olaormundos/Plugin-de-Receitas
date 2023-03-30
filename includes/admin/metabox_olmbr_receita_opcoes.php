<?php
  function olmbr_receita_opcoes($post){
    $receita_data = get_post_meta($post->ID, 'receita_data', true);

    if(empty($receita_data)){
      $receita_data = array(
        'ingredientes'      =>      '',
        'tempo'             =>      '',
        'utensilios'        =>      '',
        'dificuldade'       =>      '',
        'tipo'              =>      ''
      );
    }
    ?>
      <h3>Ingredientes:</h3>
        <input type="text" name="olmbr_ingredientes" id="" value="<?php echo $receita_data['ingredientes'] ?>"/>

      <h3>Tempo da receita:</h3>
        <input type="text" name="olmbr_tempo" id="" value="<?php echo $receita_data['tempo'] ?>"/>

      <h3>utensílios:</h3>
        <input type="text" name="olmbr_utensilios" id="" value="<?php echo $receita_data['utensilios'] ?>"/>

      <h3>Nível de dificuldade:</h3>
        <select name="olmbr_dificuldade" id="">
          <option value="" hidden></option>
          <option value="0" <?php echo($receita_data['dificuldade']=='0')?'selected="selected"':''; ?>>Iniciante</option>
          <option value="1" <?php echo($receita_data['dificuldade']=='1')?'selected="selected"':''; ?>>Intermediário</option>
          <option value="2" <?php echo($receita_data['dificuldade']=='2')?'selected="selected"':''; ?>>Avançado</option>
        </select> 
        
      <h3>Tipo da receita:</h3>
        <input type="text" name="olmbr_tipo" id="" value="<?php echo $receita_data['tipo'] ?>" />  
    <?php
  }