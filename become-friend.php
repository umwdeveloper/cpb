<?php
include_once "includes/functions.php";
include_once "includes/mail.php";

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (empty($name) || empty($email)) {
        echo json_encode(['success' => false, 'message' => 'Name and email are required']);
        exit;
    }

    $subject = "New CPB Friend Request";
    $body = "<strong>New Friend Request</strong><br><br>" .
            "<strong>Name: </strong> " . htmlspecialchars($name) . "<br>" .
            "<strong>Email: </strong> " . htmlspecialchars($email);

    $result = sendMail($email, $name, $subject, $body);

    if ($result['status'] === 'success') {
        echo json_encode(['success' => true, 'message' => 'Congratulations! You are now a friend/supporter of CPB']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send friend request']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
