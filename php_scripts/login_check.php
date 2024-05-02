<?php
include '../php_scripts/connection.php';

// Rozpocznij sesję
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE login='$username' AND pass='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Zapisz dane użytkownika w sesji
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['last_activity'] = time();
        // Przekierowanie na stronę główną po zalogowaniu
        header("Location: index.php");
        exit();
        
    } else {
        $message = "Nieprawidłowa nazwa użytkownika lub hasło!";
    }
}
$conn->close();
?>
