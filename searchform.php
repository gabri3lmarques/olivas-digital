<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'textdomain' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Digite sua pesquisa...', 'placeholder', 'textdomain' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <img type="submit" src="<?php echo get_template_directory_uri() . "/assets/images/template/search.svg" ?>" alt="">
</form>