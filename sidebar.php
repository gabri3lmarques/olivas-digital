<?php 

$terms = get_terms( array(
    'taxonomy' => 'tipo',
    'hide_empty' => false, 
) );


if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    echo '<ul>';
    foreach ( $terms as $term ) {
        echo '<li><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
} else {
    echo 'Nenhum termo encontrado.';
}