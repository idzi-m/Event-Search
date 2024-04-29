    <?php
    include '../php_scripts/connection.php';
    include '../db_scripts/event/event_search.php';
    ?>

    <!DOCTYPE html>
    <html lang="pl" class="document">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wyszukiwarka Eventów</title>
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body class="content">
        <fieldset class="header-footer">
            <legend>Nagłówek z grafiką - slajder z grafikami najnowszych wydarzeń(w tym tygodniu). Poszczególne zdjęcia przenoszą do opisu eventu.</legend>
        </fieldset>
        
        <fieldset class="section">
            <legend class="section-legend">EVENTSEARCH - wszystkie wydarzenia w jednym miejscu!</legend>
            <button onclick="window.location.href='login.php'" class='login-button'>LOGIN</button> 
            <button onclick="window.location.href='profile.php'" class="profile-button">PROFIL</button>
            <button onclick="window.location.href='add_event_form.php'" class="add-button">DODAJ WYDARZENIE</button>
        </fieldset>

        <fieldset class="section">
            <legend class="section-legend">Wyszukiwarka</legend>
            <!-- Tutaj dodaj pole do wyszukiwania -->
            <form class="search-form" method="get" action="">
                <input type="text" name="search" class= "field-input" class="search-input" placeholder="Wyszukaj...">
                <button type="submit" formmethod="get" class="search-button">SZUKAJ</button>
            </form>
        </fieldset>

    <!-- Filtry -->
        <fieldset class="section">
        <legend class="section-legend">Filtry</legend>
        <form class="filter-form" method="get" action="">
            <label hidden for="city-filter">Miasto:</label>
            <input type="text" id="city-filter" name="city" class="field-input" class="filter-input" placeholder="Miasto">

            <label hidden for="type-filter">Typ:</label>
            <select id="type-filter" name="type" class="field-input" class="filter-select">
                <option value="">Wybierz typ...</option>
                <option value="koncert">Koncert</option>
                <option value="wystawa">Wystawa</option>
                <option value="spotkanie">Spotkanie</option>
            </select>

            <label hidden for="date-from">Data od:</label>
            <input type="date" id="date-from" name="date_from" class="field-input" class="filter-input" placeholder="Data od">

            <label hidden for="date-to">Data do:</label>
            <input type="date" id="date-to" name="date_to" class="field-input" class="filter-input" placeholder="Data do">

            <label hidden for="price-from">Cena od:</label>
            <input type="number" id="price-from" name="price_from" class="field-input" class="filter-input" placeholder="Cena od">

            <label hidden for="price-to">Cena do:</label>
            <input type="number" id="price-to" name="price_to" class="field-input" class="filter-input" placeholder="Cena do">

            <button type="submit" formmethod="get" class="button__clear">RESET</button>
        </form>
    </fieldset>

        <fieldset class="section">
            <legend class="section-legend">Wyniki</legend>
            <table class="results-table">
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
