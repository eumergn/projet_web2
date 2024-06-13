<?php
include_once('db.php');

$lastDisplayedMessageIndex = isset($_GET['lastDisplayedMessageIndex']) ? intval($_GET['lastDisplayedMessageIndex']) : 0;
$database = new Database();
$contracts = $database->getMessages($lastDisplayedMessageIndex);

header('Content-Type: application/json');
echo json_encode($contracts);
?>