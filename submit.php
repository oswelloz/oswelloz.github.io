<?php
// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Validate input
    if (empty($name) || empty($email) || empty($message)) {
        // Redirect back with error if fields are empty
        header("Location: /index.html?error=emptyfields");
        exit();
    }
    
    // Email details
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New message from CV Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect with success message
        header("Location: /index.html?success=true#contact-div");
        exit();
    } else {
        // Redirect with error message if mail fails
        header("Location: /index.html?error=mailerror");
        exit();
    }
} else {
    // Redirect if accessed without POST method (optional)
    header("Location: /index.html");
    exit();
}
?>
