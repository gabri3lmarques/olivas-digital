<?php

get_header();
?>

<section class="projetos-page container">
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <main>
        <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                echo "<div class=\"projeto\">";
                
                $title = get_the_title();
                $link = get_the_permalink();
                $imagem = get_field('imagem');

                if ( $imagem ) {

                    $url = $imagem[ "url" ];

                    echo "<a href=\"$link\"><img class=\"imagem__projeto\" src=\"$url\" alt=\"Lorem ipsum dolor sit\"></a>";

                }
        
                echo "<a class=\"title-link\" href=\"$link\"><h3>$title</h3></a>";

               $excerpt = get_the_excerpt(); 
               echo "<p>$excerpt </p>";

                                   // Obtém os termos da taxonomia 'tipo' associados ao post
                                   $tipos = get_the_terms( get_the_ID(), 'tipo' );
        
                    // Verifica se há termos
                    if( $tipos && ! is_wp_error( $tipos ) ) {

                        echo "<div class=\"tipos\">";

                        foreach ( $tipos as $tipo ) {
                            echo '<div class="tipo"><img class="tipo-tag" src="' . get_template_directory_uri() . '/assets/images/template/tag.svg">' . esc_html( $tipo->name ) . '</div>';
                        }

                        echo "</div>";
            
                    }
                echo "</div>";
            endwhile;
        else :
            echo '<p>Nenhuma postagem encontrada.</p>';
        endif;
        ?>
    </main>
</section>


<?php get_footer(); ?>

