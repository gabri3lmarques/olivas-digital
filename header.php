<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <header class="site-header">
        <div class="logo">
            <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/logo-svg.svg" ?>"></a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('Home', 'textdomain'); ?></a></li>
                <li><a href="<?php echo esc_url( home_url('/projetos') ); ?>"><?php _e('Projetos', 'textdomain'); ?></a></li>
                <li><a href="<?php echo esc_url( home_url('/contato') ); ?>"><?php _e('Contato', 'textdomain'); ?></a></li>
                <li><a href="<?php echo esc_url( home_url('/docs') ); ?>"><?php _e('Docs', 'textdomain'); ?></a></li>
            </ul>
        </nav>
        <img class="open-menu" src="<?php echo get_template_directory_uri() . "/assets/images/template/icon-open.svg" ?>">
    </header>
    <p class="breadcrumb">
        <?php 
            if (is_home()) {
                echo __("Home", "textdomain") . " - <em>" . get_bloginfo('name') . "</em>";
            } else {
                $current_slug = ucfirst( get_query_var('pagename') );
                echo "$current_slug - <em>" . get_bloginfo('name') . "</em>";
            }
        ?>
    </p>
</div>


