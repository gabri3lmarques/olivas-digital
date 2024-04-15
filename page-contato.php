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

echo do_shortcode('[contact-form-7 id="8fea212" title="Sem título"]');

echo "</section>";

get_footer();

?>

