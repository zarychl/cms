<?php
include_once("settings.php");//plik ze stałymi do połączenia z bazą
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);//tworzenie połączenia z bazą

// sprawdzamy czy nie ma błędu połączenia
if ($mysqli -> connect_errno) {
  echo "Błąd łączenia z badą danych: " . $mysqli -> connect_error;
  exit();
}
?>