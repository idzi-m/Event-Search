<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventSearch";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>