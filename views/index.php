<?php
include '../php_scripts/connection.php';
include '../db_scripts/event/event_search.php';
?>

<!DOCTYPE html>
<html lang="pl" class='document'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka Eventów</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class='content'>
    <fieldset class="header-footer">
        <legend>Nagłówek z grafiką - slajder z grafikami najnowszych wydarzeń(w tym tygodniu). Poszczególne zdjęcia przenoszą do opisu eventu.</legend>
    </fieldset>
    
    <fieldset>
        <legend class="section-legend">EVENTSEARCH - wszystkie wydarzenia w jednym miejscu!</legend>
        <button onclick="window.location.href='login.php'" class='login-button'>LOGIN</button> 
        <button onclick="window.location.href='profile.php'" class="profile-button">PROFIL</button>
        <button onclick="window.location.href='add_event_form.php'" class="add-button">DODAJ</button>
    </fieldset>

    <fieldset class="section">
        <legend class="section-legend">Wyszukiwarka</legend>
        <!-- Tutaj dodaj pole do wyszukiwania -->
        <form class="search-form" method="get" action="">
            <input type="text" name="search" class="search-input" placeholder="Wyszukaj...">
            <button type="submit" formmethod="get" class="search-button">SZUKAJ</button>
        </form>
    </fieldset>

    <fieldset class="section">
        <legend class="section-legend">Filtry</legend>
        <!-- Tutaj dodaj belkę z filtrami -->
    </fieldset>

    <fieldset class="section">
        <legend class="section-legend">Wyniki</legend>
        <table border="1" class="results-table">
            <tr>
                
                <th>Nazwa</th>
                <th>Data wydarzenia</th>
                <th>Miasto</th>
                <th>Typ</th>
                <th>Lokalizacja</th>
                <th>Krótki opis</th>
                <th>Cena</th>
                <th>Akcje</th>
            </tr>

            <!-- Skrypt wyświetlający wszystkie wydarzenia   -->
            <?php include "../db_scripts/event/event_list.php"; ?>
        </table>
    </fieldset>

    <fieldset class="header-footer">
        <legend>Stopka z grafiką - slajder z grafikami najnowszych wydarzeń. Poszczególne zdjęcia przenoszą do opisu eventu.</legend>
    </fieldset>

</body>
</html>
