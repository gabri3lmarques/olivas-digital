<?php

function theme_enqueue_styles() {
    // google fonts 
    wp_enqueue_style( 'googleapis', '//fonts.googleapis.com', array(), '1.0', 'all' );
    wp_enqueue_style( 'gstatic', '//fonts.gstatic.com', array(), '1.0', 'all' );
    wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', array(), '1.0', 'all' );
    // template styles 
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/general.css' );
    wp_enqueue_style( 'header', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css' );
    wp_enqueue_style( 'archive', get_template_directory_uri() . '/assets/css/archive.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_scripts() {
    // Registrando e enfileirando o script
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


add_theme_support( 'title-tag' );

// Registrando o Custom Post Type "projetos"
function registrar_post_type_projetos() {
    $labels = array(
        'name'               => 'Projetos',
        'singular_name'      => 'Projeto',
        'add_new'            => 'Adicionar Novo Projeto',
        'add_new_item'       => 'Adicionar Novo Projeto',
        'edit_item'          => 'Editar Projeto',
        'new_item'           => 'Novo Projeto',
        'all_items'          => 'Todos os Projetos',
        'view_item'          => 'Ver Projeto',
        'search_items'       => 'Buscar Projetos',
        'not_found'          => 'Nenhum projeto encontrado',
        'not_found_in_trash' => 'Nenhum projeto encontrado na lixeira',
        'menu_name'          => 'Projetos'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projetos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'projetos', $args );
}
add_action( 'init', 'registrar_post_type_projetos' );

// Registrando a Taxonomia "tipo" para o Custom Post Type "projetos"
function registrar_taxonomia_tipo() {
    $labels = array(
        'name'              => 'Tipos',
        'singular_name'     => 'Tipo',
        'search_items'      => 'Buscar Tipos',
        'all_items'         => 'Todos os Tipos',
        'parent_item'       => 'Tipo Pai',
        'parent_item_colon' => 'Tipo Pai:',
        'edit_item'         => 'Editar Tipo',
        'update_item'       => 'Atualizar Tipo',
        'add_new_item'      => 'Adicionar Novo Tipo',
        'new_item_name'     => 'Novo Nome do Tipo',
        'menu_name'         => 'Tipos',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tipo' ),
    );

    register_taxonomy( 'tipo', 'projetos', $args );
}
add_action( 'init', 'registrar_taxonomia_tipo' );

//adicionando placeholder ao form nativo de search
function custom_search_form_placeholder($form) {
    $placeholder = "Digite sua pesquisa...";
    $form = str_replace('type="search"', 'type="search" placeholder="' . $placeholder . '"', $form);
    return $form;
}
add_filter('get_search_form', 'custom_search_form_placeholder');
