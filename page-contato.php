<?php

get_header();

echo "<section class=\"page-contato container\">";

if(!empty($_POST)) {

    $email = sanitize_email($_POST['your-email']);
    $name =  sanitize_text_field($_POST['your-name']);
    $subject = sanitize_text_field($_POST['your-subject']);
    $message = sanitize_text_field($_POST['your-message']);

    if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {
        ?>
        <script>window.location.href = "<?php echo esc_url( home_url() ); ?>";</script>
        <?php
        exit;
    }
}

// Verifica se o shortcode do Contact Form 7 existe
if (shortcode_exists('contact-form-7')) {
    echo do_shortcode('[contact-form-7 id="8fea212" title="Sem título"]');
} else {
    echo "<p>O shortcode do formulário de contato não está disponível.</p>";
}

echo "</section>";

get_footer();

?>
