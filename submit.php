<?php
// Error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = "Please fill out all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format. Please enter a valid email address.";
    } else {
        // Form data is valid, process the form (example: send email)
        $to = "oswell.ndhlovu@umuzi.org"; // Replace with your email address
        $subject = "Contact Form Submission from Oswell Ndhlovu CV";

        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Message:\n$message";

        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            $success_message = "Message sent successfully!";
        } else {
            $error_message = "Failed to send message. Please try again later.";
        }
    }
} else {
    // If form is not submitted via POST method, redirect or handle as necessary
    $error_message = "Error: Form submission method not valid.";
}

// Redirect or display back to the contact form page (index.html)
header("Location: index.html");
exit();
?>
