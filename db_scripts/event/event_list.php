<?php
include '../php_scripts/connection.php';

// Ustawienie domyślnych wartości
$whereClause = "is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

// Sprawdzenie, czy jakieś filtry zostały przekazane
if(isset($_GET['city']) && !empty($_GET['city'])) {
    $city = $_GET['city'];
    $whereClause .= " AND event_city = '$city'";
}

if(isset($_GET['type']) && !empty($_GET['type'])) {
    $type = $_GET['type'];
    $whereClause .= " AND type = '$type'";
}

if(isset($_GET['date_from']) && !empty($_GET['date_from'])) {
    $date_from = $_GET['date_from'];
    $whereClause .= " AND event_date >= '$date_from'";
}

if(isset($_GET['date_to']) && !empty($_GET['date_to'])) {
    $date_to = $_GET['date_to'];
    $whereClause .= " AND event_date <= '$date_to'";
}

if(isset($_GET['price_from']) && !empty($_GET['price_from'])) {
    $price_from = $_GET['price_from'];
    $whereClause .= " AND cena >= $price_from";
}

if(isset($_GET['price_to']) && !empty($_GET['price_to'])) {
    $price_to = $_GET['price_to'];
    $whereClause .= " AND cena <= $price_to";
}

// Zapytanie SQL z uwzględnieniem filtrowania
$sql = "SELECT * FROM events WHERE $whereClause ORDER BY event_date DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // Wyświetlenie wyników
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["event_date"] . "</td>";
        echo "<td>" . $row["event_city"] . "</td>";
        echo "<td>" . $row["type"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["short_desc"] . "</td>";
        echo "<td>" . $row["cena"] . "</td>";
        echo "<td><button onclick=\"window.location.href='event_details.php?event_id=" . $row["id"] . "'\">SZCZEGÓŁY</button></td>";
        echo "</tr>";
    }
} else {
    // Brak wyników
    echo "<tr><td colspan='10'>Brak wydarzeń</td></tr>";
}

mysqli_close($conn);
?>
