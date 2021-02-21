<?php
$db_name = getenv("db_name");
$db_host = getenv("host");
$username = getenv("username");
$password = getenv("password");

$dsn = 'mysql:host=' . $db_host . ";dbname=" . $db_name;

$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
  $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
  echo "Unable to connect to database: " . $e->getMessage();
}