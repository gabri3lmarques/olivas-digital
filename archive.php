<?php

get_header();

get_sidebar();

// O loop do WordPress
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    $imagem = get_field('imagem');

    if ( $imagem ) {

        $url = $imagem[ "url" ];

        echo "<img src=\"$url\">";

    }
        // Conteúdo da postagem aqui
        the_title('<h2>', '</h2>'); // Título da postagem
       // Exibir o conteúdo do post
       $excerpt = get_the_excerpt(); 
       echo "<p>$excerpt </p>";
               // Obtém os termos da taxonomia 'tipo' associados ao post
               $tipos = get_the_terms( get_the_ID(), 'tipo' );

               // Verifica se há termos
               if( $tipos && ! is_wp_error( $tipos ) ) {
       
                   foreach ( $tipos as $tipo ) {
                       echo '<p>' . esc_html( $tipo->name ) . '</p>';
                   }
        
               }
    endwhile;
else :
    // Se não houver postagens encontradas
    echo '<p>Nenhuma postagem encontrada.</p>';
endif;

?>

