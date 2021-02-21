<?php
include "../main.php";

require_once './vendor/autoload.php';
use Twilio\TwiML\MessagingResponse;

$response = new MessagingResponse();

header('Content-Type: text/xml');

$sender = filter_input(INPUT_POST, "From");
$content = filter_input(INPUT_POST, "Body");

$query = "INSERT INTO message(sender, content)
VALUES (:sender, :content)";

$statement = $db->prepare($query);
$statement->bindValue(":sender", $sender);
$statement->bindValue(":content", $content);

$statement->execute();
$statement->closeCursor();

$response->message('Message was sent to the Morse Code Bot!');

echo $response;