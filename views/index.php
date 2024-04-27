<?php
include 'php_scripts\connection.php';

$searchValue = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchValue = $_GET['search'];
    $sql = "SELECT * FROM Events WHERE is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND (name LIKE '%$searchValue%' OR event_city_id LIKE '%$searchValue%' OR type LIKE '%$searchValue%' OR location LIKE '%$searchValue%' OR short_desc LIKE '%$searchValue%' OR cena LIKE '%$searchValue%') ORDER BY event_date DESC";
} else {
    $sql = "SELECT * FROM Events WHERE is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY) ORDER BY event_date DESC";
}
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka Eventów</title>
</head>

<body>
    <fieldset>
        <legend>Nagłówek z grafiką - slajder z grafikami najnowszych wydarzeń(w tym tygodniu). Poszczególne zdjęcia przenoszą do opisu eventu.</legend>
    </fieldset>
    
    <fieldset>
        <legend>EVENTSEARCH - wszystkie wydarzenia w jednym miejscu!</legend>
        <button onclick="window.location.href='login.php'">LOGIN</button> <button onclick="window.location.href='profil.php'">PROFIL</button>
    </fieldset>

    <fieldset>
        <legend>Wyszukiwarka</legend>
        <!-- Tutaj dodaj pole do wyszukiwania -->
        <form method="get" action="">
            <input type="text" name="search" placeholder="Wyszukaj...">
            <button type="submit" formmethod="get">SZUKAJ</button>
        </form>
    </fieldset>

    <fieldset>
        <legend>Filtry</legend>
        <!-- Tutaj dodaj belkę z filtrami -->
    </fieldset>

    <fieldset>
        <legend>Dodaj nowe wydarzenie</legend>
        <!-- Przycisk DODAJ -->
        <button onclick="window.location.href='add_event_form.php'">DODAJ</button>
    </fieldset>

    <fieldset>
        <legend>Wyniki</legend>
        <table border="1">
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

            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["event_date"] . "</td>";
                    echo "<td>" . $row["event_city_id"] . "</td>";
                    echo "<td>" . $row["type"] . "</td>";
                    echo "<td>" . $row["location"] . "</td>";
                    echo "<td>" . $row["short_desc"] . "</td>";
                    echo "<td>" . $row["cena"] . "</td>";
                    echo "<td><button onclick=\"window.location.href='event_details.php?event_id=" . $row["id"] . "'\">SZCZEGÓŁY</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Brak wydarzeń</td></tr>";
            }
            
          
            
            ?>
        </table>
    </fieldset>

    <fieldset>
        <legend>Stopka z grafiką - slajder z grafikami najnowszych wydarzeń. Poszczególne zdjęcia przenoszą do opisu eventu.</legend>
    </fieldset>

</body>
</html>