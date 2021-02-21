<?php
include "../main.php";

header('Content-Type: application/json');

$pwd = filter_input(INPUT_GET, "password");

if ($pwd != getenv("get_password")) {
  echo json_encode(array("response" => "No bueno"));
  exit();
}

$query = "SELECT * FROM message";

$statement = $db->prepare($query);

$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

echo json_encode($result);

$query = "DELETE FROM message";

$statement = $db->prepare($query);

$statement->execute();
$statement->closeCursor();