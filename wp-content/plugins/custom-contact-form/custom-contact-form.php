<?php
/*
Plugin Name: Custom Contact Form
Description: message form to email 
*/
    require_once ABSPATH . WPINC . '/PHPMailer/PHPMailer.php';
    require_once ABSPATH . WPINC . '/PHPMailer/SMTP.php';
    require_once ABSPATH . WPINC . '/PHPMailer/Exception.php';
    

add_shortcode('replace_form', 'render_contact_form');


function render_contact_form() {
    ob_start();
    ?>
    <form method="post" class="custom-contact-form">
        <p>
            <label for="sender_name">Name:</label>
            <input type="text" name="sender_name" id="sender_name" required>
        </p>
        <p>
            <label for="to_email">To:</label>
            <input type="email" name="to_email" id="to_email" required>
        </p>
        <p>
            <label for="message_body">Message:</label>
            <textarea name="message_body" id="message_body" required></textarea>
        </p>
        
        <?php wp_nonce_field('custom_contact_form', 'contact_nonce'); ?>
        <input type="submit" name="submit_contact" value="Send">
    </form>
    <?php
    return ob_get_clean();
}

add_action('init', 'process_contact_form');

function process_contact_form() {
    if (!isset($_POST['submit_contact'])) return;
    
    if (!wp_verify_nonce($_POST['contact_nonce'], 'custom_contact_form')) {
        wp_die('Invalid request');
    }
    
    $name = sanitize_text_field($_POST['sender_name']);
    $to = sanitize_email($_POST['to_email']);
    $body = sanitize_textarea_field($_POST['message_body']);

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    
    try {
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dankibish@gmail.com'; 
        $mail->Password = '***'; //replace to real password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        
        $mail->setFrom('dankibish@gmail.com');
        $mail->addAddress($to);
        $mail->Subject = "New message from {$name}";
        $mail->Body = $body;
        
        $mail->send();
        wp_redirect(add_query_arg('sent', '1'));
        exit;
        
    } catch (Exception $e) {
        wp_die("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    }
}


add_action('wp_footer', 'display_success_message');

function display_success_message() {
    if (isset($_GET['sent'])) {
        echo '<div class="success-message">Message sent successfully!</div>';
    }
}