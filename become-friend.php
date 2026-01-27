<?php
include_once "includes/functions.php";
include_once "includes/mail.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $consent = isset($_POST['consent']) ? true : false;

    if (empty($name) || empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Name and email are required']);
        exit;
    }

    $subject = "New CPB Ally Friend Request";
    $body = "<strong>New Ally Request</strong><br><br>" .
            "<strong>Name: </strong> " . htmlspecialchars($name) . "<br>" .
            "<strong>Email: </strong> " . htmlspecialchars($email) . "<br>" .
            "<strong>Digital Card Consent: </strong> " . ($consent ? 'Yes' : 'No');

    $result = sendMail($email, $name, $subject, $body);

    if ($result['status'] === 'success') {
        echo json_encode(['success' => true, 'message' => 'Congratulations! You are now an ally']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send ally request']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
