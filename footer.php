<footer class="site-footer">
    <div class="container">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri() . "/assets/images/template/logo-footer.svg" ?>">
        </div>
        <div class="social">
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-facebook.svg" ?>" alt="" ></a>
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-instagram.svg" ?>" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-pinterest.svg" ?>" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri() . "/assets/images/template/footer-twitter.svg" ?>" alt=""></a>
        </div>
        <div>
            <p>Lorem ipsum dollor @2024.</p>
        </div>
    </div>
</footer>
<div class="site-overlay">
            <div class="site-overlay__content">
                <div class="site-overlay__wrapper">
                    <div class="site-overlay__content__background">
                        <div class="site-overlay__content__header">
                            <img class="close-menu" src="<?php echo get_template_directory_uri() . "/assets/images/template/icon-close.svg" ?>"> 
                        </div>
                        <div class="mobile-menu-picture">
                            <img
                                src="<?php echo get_template_directory_uri() . "/assets/images/template/olivas.png" ?>"
                                alt="" />
                        </div>
                        <nav class="mobile-menu">
                            <ul>
                            <li><a href="<?php echo esc_url( home_url() ); ?>"><?php _e('Home', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url('/projetos') ); ?>"><?php _e('Projetos', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url('/contato') ); ?>"><?php _e('Contato', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url('/docs') ); ?>"><?php _e('Docs', 'textdomain'); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url('/home-teste') ); ?>"><?php _e('Home teste', 'textdomain'); ?></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="site-overlay__content__border">
                        <div class="site-overlay__content__border__top"></div>
                        <div class="site-overlay__content__border__body"></div>
                    </div>
                </div>
                <div class="site-overlay__bottom">
                    <div class="site-overlay__bottom__left-border"></div>
                    <div class="site-overlay__bottom__right-border"></div>
                </div>
            </div>
        </div>
<?php wp_footer(); ?>
</body>
</html>