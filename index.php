<?php 

get_header();

get_search_form(); 

// Definir o tipo de post
$post_type = 'projetos';

// Criar a consulta
$query = new WP_Query( array(
    'post_type' => $post_type,
    'order' => 'ASC',
    'posts_per_page' => -1,
) );

// Loop pelos posts
if ( $query->have_posts() ) :

    while ( $query->have_posts() ) : $query->the_post();

        $imagem = get_field('imagem');

        if ( $imagem ) {

            $url = $imagem[ "url" ];

            echo "<img src=\"$url\">";

        }

        $permalink = get_permalink();

        // Exibir o título do post
        $title = get_the_title();

        echo "<h1><a href=\"$permalink\">$title</a></h1>";

        // Obtém os termos da taxonomia 'tipo' associados ao post
        $tipos = get_the_terms( get_the_ID(), 'tipo' );

        // Verifica se há termos
        if( $tipos && ! is_wp_error( $tipos ) ) {

            foreach ( $tipos as $tipo ) {
                echo '<p>' . esc_html( $tipo->name ) . '</p>';
            }
 
        }

        // Exibir o conteúdo do post
        $excerpt = get_the_excerpt(); 
        echo "<p>$excerpt </p>";

    endwhile;

endif;

get_footer();

?>

