<?php
include '../php_scripts/connection.php';

// Ustawienie domyślnych wartości
$whereClause = "is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

// Zapytanie SQL z uwzględnieniem filtrowania
$sql = "SELECT * FROM events WHERE $whereClause ORDER BY event_date DESC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    // Wyświetlenie wyników
    echo "<div class='events-grid'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div class='event-card'>";
        echo "<h2>{$row["name"]}</h2>";
        echo "<p><strong>Data:</strong> {$row["event_date"]}</p>";
        echo "<p><strong>Miasto:</strong> {$row["event_city"]}</p>";
        echo "<p><strong>Typ:</strong> {$row["type"]}</p>";
        echo "<p><strong>Lokalizacja:</strong> {$row["location"]}</p>";
        echo "<p><strong>Opis:</strong> {$row["short_desc"]}</p>";
        echo "<p><strong>Cena:</strong> {$row["cena"]}</p>";
        echo "<button onclick=\"window.location.href='event_details.php?event_id={$row["id"]}'\">SZCZEGÓŁY</button>";
        echo "</div>";
    }
    echo "</div>";
} else {
    // Brak wyników
    echo "<div class='results_item'>Brak wydarzeń</div>";
}

mysqli_close($conn);
?>