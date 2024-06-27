<?php
// Example PHP code to handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve POST data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Process the data (example: send email, save to database, etc.)

    // Return a response (JSON format)
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Message received successfully.']);
    exit;
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
    exit;
}
?>
