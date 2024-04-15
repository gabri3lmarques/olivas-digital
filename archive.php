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
            $imagem = get_field('imagem');

            if ( $imagem ) {

                $url = $imagem[ "url" ];

                echo "<img src=\"$url\">";

            }
        
                the_title('<h2>', '</h2>'); 

               $excerpt = get_the_excerpt(); 
               echo "<p>$excerpt </p>";
        
                       $tipos = get_the_terms( get_the_ID(), 'tipo' );

                       if( $tipos && ! is_wp_error( $tipos ) ) {
            
                           foreach ( $tipos as $tipo ) {
                               echo '<p>' . esc_html( $tipo->name ) . '</p>';
                           }
                
                       }
            endwhile;
        else :
            echo '<p>Nenhuma postagem encontrada.</p>';
        endif;
        ?>
    </main>
</section>


<?php get_footer(); ?>

