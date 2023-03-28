<?php
/*
Plugin Name: Receitas
Description: Esse plugin foi desenvolvido com o intuito de o usuário adicionar e configurar receitas em seu blog profissional, dando a possibilidade de criar um sistema complexo com várias personalizações. 
Version: 1.0
Author: Olá Ormundos
Author URI: https://github.com/olaormundos/
Text Domain: receitas
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.4
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Verifica se está tentando executar o index.php do plugin diretamente
if(!function_exists('add_action')){
  echo __('Opa! Eu sou só um plugin, não posso ser executado diretamente', 'receitas');
  exit;
}

// Setup

// Includes
include('includes/activate.php');

// Hooks
register_activation_hook(__FILE__, 'olmbr_activate_plugin');

// Shortcodes