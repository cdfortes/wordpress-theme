<?php
function registrar_cpt_produto() {
  
  register_post_type( 'produto',
    array(
      'labels' => array(
        'name' => __( 'Produto' ),
        'singular_name' => __( 'Produto' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'produtos'),
    )
  );
}
add_action('init', 'registrar_cpt_produto');

?>