<?php 

echo "<p>Filtre por tipo de projeto</p>";

$terms = get_terms( array(
    'taxonomy' => 'tipo',
    'hide_empty' => false, 
) );

if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
        echo '<a class="tipo-link" href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
    }
} else {
    echo 'Nenhum termo encontrado.';
}