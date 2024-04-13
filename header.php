<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
    $home_url = esc_url( home_url() );
?>
<div class="container">
    <header class="theme-header">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/template/logo-svg.svg" ?>">
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $home_url ?>">Home</a></li>
                <li><a href="<?php echo esc_url( get_post_type_archive_link( 'projetos' ) ); ?>">Projetos</a></li>
                <li><a href="/contato">Contato</a></li>
            </ul>
        </nav>
    </header>
</div>