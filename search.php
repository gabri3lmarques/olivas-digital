<?php get_header(); ?>

<main id="main" class="site-main">
    <section class="content-area">
        <div class="container">
            <header class="page-header">
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'textdomain' ), get_search_query() ); ?></h1>
            </header><!-- .page-header -->

            <?php if ( have_posts() ) : ?>
                <div class="search-results">
                    <?php
                    // Loop para exibir os resultados da pesquisa
                    while ( have_posts() ) :
                        the_post();
                        // Inclua o template do conteúdo da postagem
                        the_title();
                    endwhile;
                    ?>
                </div><!-- .search-results -->

                <?php the_posts_navigation(); ?>

            <?php else : ?>
                <p><?php _e( 'No results found.', 'textdomain' ); ?></p>
            <?php endif; ?>
        </div><!-- .container -->
    </section><!-- .content-area -->
</main><!-- #main -->

<?php get_footer(); ?>
