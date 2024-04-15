<?php get_header(); ?>
<section class="home-page container">
    <main>
        <div class="round-container">
            <div class="brand-image">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/template/olivas.png" ?>" alt="">
            </div>
            <h3 class="site-name"><?php echo get_bloginfo('name') ?></h3>
            <p class="site-intro">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit. </p>
            <div class="social">
                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-facebook.svg" ?>" alt="" ></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-instagram.svg" ?>" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-pinterest.svg" ?>" alt=""></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-twitter.svg" ?>" alt=""></a>
            </div>
        </div>
        <div class="posts-home">
        <?php 
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

                    echo "<article class=\"projeto\">";

                    $imagem = get_field('imagem');

                    if ( $imagem ) {

                        $url = $imagem[ "url" ];

                        echo "<img src=\"$url\" alt=\"Lorem ipsum dolor sit.\">";

                    }

                    $permalink = get_permalink();

                    // Exibir o título do post
                    $title = get_the_title();

                    echo "<h2><a href=\"$permalink\">$title</a></h2>";

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

                    // Exibir o conteúdo do post
                    $excerpt = get_the_excerpt(); 
                    echo "<p>$excerpt </p>";

                    echo "</article>";

                endwhile;

            endif;
        ?>
        </div>
    </main>
    <aside>
        <div class="round-container">
            <?php get_search_form();  ?>
        </div>
    </aside>
</section>
<?php get_footer(); ?>