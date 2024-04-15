<?php

get_header();

echo "<div class=\"single-page container\">";

// Verifica se existem postagens disponíveis
if ( have_posts() ) :
    // Loop de postagens
    while ( have_posts() ) : the_post();

    $link_projeto = get_field('link-projeto');
    $texto_link = isset($link_projeto) && !empty($link_projeto) ? $link_projeto : '#';

    $title = get_the_title();
?>
        <div class="post">
            <h1><?php echo $title ?></h1>
            <div class="post-meta">
                <p>Data de Criação: <?php the_date(); ?></p>
            </div>
            <div>
            <?php 
                $imagem = get_field('imagem');

                if ( $imagem ) {

                    $url = $imagem[ "url" ];

                    echo "<img src=\"$url\">";

                }            
            ?>
            </div>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <p>
                <a class="external-link" href="<?php echo $texto_link ?>">ver projeto</a>
            </p>
        </div>
<?php
    endwhile;
else :
    // Se não houver postagens disponíveis
?>
    <p><?php esc_html_e( 'Desculpe, não há postagens disponíveis.', 'text-domain' ); ?></p>
<?php
endif;

echo "</div>";

get_footer();

?>
