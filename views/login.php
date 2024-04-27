<?php
include '../php_scripts/connection.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Users WHERE login='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Użytkownik zalogowany pomyślnie, przekierowanie na stronę główną
        header("Location: index.php");
        exit();
    } else {
        $message = "Nieprawidłowa nazwa użytkownika lub hasło!";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<fieldset>
    <legend>Logowanie</legend>
    <form method="post" action="">
        <div>
            <label for="login">Nazwa użytkownika:</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Hasło:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">ZALOGUJ</button>
        </div>
    </form>
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</fieldset>
<fieldset>
    <legend>EVENTSEARCH - wszystkie wydarzenia w jednym miejscu! Nie masz konta? Zarejestruj się!</legend>
    <button onclick="window.location.href='register.php'">REJESTRACJA</button>
</body>
</html>
