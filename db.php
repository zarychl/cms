<?php
include_once("settings.php");
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Błąd łączenia z badą danych: " . $mysqli -> connect_error;
  exit();
}
?>