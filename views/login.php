<?php
include '../php_scripts/connection.php';
include '../php_scripts/login_check.php';
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
    
<header class="header">
        <h1>EventSearch - Wyszukiwarka eventów!</h1>
</header>

<fieldset class="section section_login">
    <legend class="section_legend">Nie masz konta? Zarejestruj się!</legend>
    <button onclick="window.location.href='register.php'" class="button">REJESTRACJA</button>
</fieldset>

<fieldset class="section section_login">
    <legend class="section_legend">Logowanie</legend>
    <form method="post" action="" class="form_login">
        <div class="form_group">
            <label hidden for="login">Nazwa użytkownika:</label>
            <input type="text" name="username" class="field_input" placeholder="Nazwa użytkownika" required>
        </div>
        <div class="form_group">
            <label hidden for="password">Hasło:</label>
            <input type="password" name="password" class="field_input" placeholder="Hasło" required>
        </div>
        <div class="form_group">
            <button type="submit" class="button">ZALOGUJ</button>
        </div>
    </form>
    <?php
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</fieldset>

<fieldset class="section section_login">
    <legend class="section_legend">Akcje</legend>
    <button onclick="window.location.href='index.php'" class="button">POWRÓT DO LISTY WYDARZEŃ</button>
</fieldset>
<footer class="footer">
        <p>&copy; 2024 EventSearch.</p>
        <p>Find me on <a href="https://github.com/idzi-m" target="_blank">GitHub</a></p>
    </footer>
</body>
</html> 