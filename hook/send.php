<?php
$token = '8271243985:AAEohG0mH7H3vXVTs5BYnh0bzLky9j4hs8w';
$chat_id = '@palkovics';

$name = $_POST['name'] ?? '';
$message = $_POST['message'] ?? '';

$text = "New form submission:\nName: $name\nMessage: $message";

$url = "https://api.telegram.org/bot$token/sendMessage";

$data = [
    'chat_id' => $chat_id,
    'text' => $text
];

file_get_contents($url . '?' . http_build_query($data));
?>
