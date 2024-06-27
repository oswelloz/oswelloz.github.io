<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve POST data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Example: Process the data (send email, save to database, etc.)
    // In this example, we will simply log the data received
    $logData = "Name: $name\nEmail: $email\nMessage: $message\n";
    file_put_contents('form-data.log', $logData, FILE_APPEND); // Log data to a file

    // Return a response (JSON format)
    header('Content-Type: application/json');
    echo json_encode(['success' => true, 'message' => 'Message received successfully.']);
    exit;
} else {
    // If not a POST request, return a 405 Method Not Allowed status
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method Not Allowed";
    exit;
}
?>
