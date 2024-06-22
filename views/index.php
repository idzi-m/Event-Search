    <?php
    include '../php_scripts/connection.php';
    include '../php_scripts/session_index.php';
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
        
        <header class="header">
            <h1>Wyszukiwarka Eventów</h1>
            <p><?php echo $user_message; ?></p>
        </header>

        <fieldset class="section">
            <legend class="section_legend">EVENTSEARCH - wszystkie wydarzenia w jednym miejscu!</legend>
        <nav id="nav" class="navigation">    
            <ul class="list-buttons">
            <li class="list-li"><?php if (!isset($_SESSION['user_id'])) { ?> <button onclick="window.location.href='login.php'" class='button_login'>ZALOGUJ</button> <?php } ?></li>    
            <li class="list-li"><?php if (isset($_SESSION['user_id'])) { ?> <button onclick="window.location.href='../php_scripts/logout.php'" class='button_logout'>WYLOGUJ</button> <?php } ?></li> 
            <li class="list-li"><button onclick="window.location.href='profile.php'" class="button_profile">PROFIL</button></li>
            <li class="list-li"><button onclick="window.location.href='add_event_form.php'" class="button_add">DODAJ WYDARZENIE</button></li>
            </ul>
        </nav>
        </fieldset> 

        <fieldset class="section">
            <legend class="section_legend">Wyszukiwarka</legend>
            <!-- Tutaj dodaj pole do wyszukiwania -->
            <form class="search_form" method="get" action="">
                <input type="text" name="search" class= "field_input" class="search_input" placeholder="Wyszukaj...">
                <button type="submit" formmethod="get" class="button_search">SZUKAJ</button>
            </form>
        </fieldset>

        <fieldset class="section">
            <legend class="section_legend">Wyniki</legend>
            <table class="results_table">
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

    </body>
    </html>
