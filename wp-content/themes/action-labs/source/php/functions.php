<?php
  // Adicionar estilos personalizados e fontes
  function meu_tema_estilos_personalizados() {
    wp_enqueue_style( 'meu-tema-fonts', get_template_directory_uri() . '/dist/fonts/avenir/Avenir-Book.ttf', array(), '1.0.0' );
  }
  add_action( 'wp_enqueue_scripts', 'meu_tema_estilos_personalizados' );



  add_theme_support( 'post-thumbnails' );
?>

