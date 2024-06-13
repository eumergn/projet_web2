<?php
require_once 'db.php';
include_once 'message.php';

$database = new Database();
$messageManager = new Message($database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $message = htmlspecialchars($_POST['message']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty(trim($name)) && !empty(trim($number)) && !empty(trim($message))) {
        $messageManager->insertionMessage($name, $email, $number, $message);
        echo 'Success'; 
    } else {
        http_response_code(400); 
        echo 'Invalid data'; 
    }
}
$messages = $messageManager->getAllMessages();
?>
