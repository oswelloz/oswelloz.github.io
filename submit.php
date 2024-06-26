<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have form validation and processing here
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Example of simple form validation (you should enhance this as needed)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Process the form (send email, save to database, etc.)
        // Example: send email
        $to = "your-email@example.com";
        $subject = "Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            // Email sent successfully
            $success_message = "Message sent successfully!";
        } else {
            // Error sending email
            $error_message = "Failed to send message. Please try again.";
        }
    } else {
        // Form data not complete
        $error_message = "Please fill out all fields.";
    }
}
?>

<!-- In your HTML, after the form section -->
<?php if (isset($success_message)): ?>
    <div class="success-message"><?php echo $success_message; ?></div>
<?php endif; ?>
