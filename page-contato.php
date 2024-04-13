<?php
    if (!empty($_POST['your-email']) && !empty($_POST['your-name']) && !empty($_POST['your-subject']) && !empty($_POST['your-message'])) {
        wp_redirect(esc_url(home_url()));
    } else {
        echo "<p>falta algo</p>";
    }
    echo do_shortcode('[contact-form-7 id="8fea212" title="Sem título"]'); 


    
    ?>

