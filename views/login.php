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
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="content">
<fieldset class="section section__login">
    <legend class="section-legend">EVENTSEARCH - wszystkie wydarzenia w jednym miejscu!<br> Nie masz konta? Zarejestruj się!</legend>
    <button onclick="window.location.href='register.php'" class="button">REJESTRACJA</button>
</fieldset>

<fieldset class="section section__login">
    <legend class="section-legend">Logowanie</legend>
    <form method="post" action="" class="form__login">
        <div class="form__group">
            <label hidden for="login">Nazwa użytkownika:</label>
            <input type="text" name="username" class="field-input" placeholder="Nazwa użytkownika" required>
        </div>
        <div class="form__group">
            <label hidden for="password">Hasło:</label>
            <input type="password" name="password" class="field-input" placeholder="Hasło" required>
        </div>
        <div class="form__group">
            <button type="submit" class="button">ZALOGUJ</button>
        </div>
    </form>
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</fieldset>

<fieldset class="section section__login">
    <legend class="section-legend">Akcje</legend>
    <button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button>
</fieldset>
</body>
</html>