<?php
include '../php_scripts/connection.php';
include '../php_scripts/session_index.php';
?>

<!DOCTYPE html>
<html lang="pl" class="document">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka Eventów</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="content">
    
    <header class="header">
        <h1>EventSearch - Wyszukiwarka eventów!</h1>
        <p><?php echo $user_message; ?></p>
    </header>

    <fieldset class="section">
        <legend class="section_legend">Wszystkie wydarzenia w jednym miejscu!</legend>
        <nav id="nav_index" class="navigation">    
            <ul class="navigation-list-buttons">
                <li class="navigation-list-li"><?php if (!isset($_SESSION['user_id'])) { ?> <button onclick="window.location.href='login.php'" class='button_login'>ZALOGUJ</button> <?php } ?></li>    
                <li class="navigation-list-li"><?php if (isset($_SESSION['user_id'])) { ?> <button onclick="window.location.href='../php_scripts/logout.php'" class='button_logout'>WYLOGUJ</button> <?php } ?></li> 
                <li class="navigation-list-li"><button onclick="window.location.href='profile.php'" class="button_profile">PROFIL</button></li>
                <li class="navigation-list-li"><button onclick="window.location.href='add_event_form.php'" class="button_add">DODAJ WYDARZENIE</button></li>
            </ul>
        </nav>
    </fieldset> 

    <fieldset class="section">
        <legend class="section_legend">Wyszukiwarka</legend>
        <!-- Tutaj dodaj pole do wyszukiwania -->
        <form class="search_form" method="get" action="index.php">
            <input type="text" name="search" class="field_input search_input" placeholder="Wyszukaj...">
            <button type="submit" class="button_search">SZUKAJ</button>
        </form>
    </fieldset>

    <fieldset class="section">
        <legend class="section_legend">Wydarzenia</legend>
        <?php include '../db_scripts/event/event_search.php'; ?>
    </fieldset>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
