<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Validate inputs (basic validation)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Set up email variables
        $to = "your-email@example.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\n$message";

        // Headers
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            $success_message = "Thank you! Your message has been sent.";
        } else {
            $error_message = "Oops! Something went wrong. Please try again later.";
        }
    } else {
        $error_message = "All fields are required.";
    }
}
?>
