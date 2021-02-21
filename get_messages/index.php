<?php
include "../main.php";

header('Content-Type: application/json');

$pwd = filter_input(INPUT_GET, "password");

if ($pwd != getenv("get_password")) {
  echo json_encode(array("response" => "No bueno"));
  exit();
}

$query = "SELECT * FROM message; DELETE FROM message;";

$statement = $db->prepare($query);

$result = $statement->execute();
$statement->closeCursor();

echo json_encode($result);