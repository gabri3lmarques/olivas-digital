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
    <header class="site-header">
        <div class="logo">
            <a href="<?php echo $home_url; ?>"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/logo-svg.svg" ?>"></a>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $home_url; ?>">Home</a></li>
                <li><a href="/projetos">Projetos</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/docs">Docs</a></li>
            </ul>
        </nav>
    </header>
    <p class="breadcrumb">
        <?php 

            $current_page_permalink = get_permalink();
            $parsed_url = parse_url( $current_page_permalink );
            $path_parts = explode( '/', $parsed_url['path'] );
            $slug = $path_parts[1]; 
            $capital_slug = ucfirst( $slug );

            $blog_name = get_bloginfo( 'name' );

            if (is_home()) {
                echo "Home - <em>$blog_name</em>";
            } else {
                echo "$capital_slug - <em>$blog_name</em>";
            }
            
        ?>
    </p>
</div>