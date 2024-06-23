<?php
include '../php_scripts/connection.php';

$searchValue = "";
$whereClause = "is_deleted = 0 AND event_date > DATE_SUB(CURDATE(), INTERVAL 1 DAY)";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $searchValue = mysqli_real_escape_string($conn, $_GET['search']);
    $whereClause .= " AND (name LIKE '%$searchValue%' OR event_city LIKE '%$searchValue%' OR type LIKE '%$searchValue%' OR location LIKE '%$searchValue%' OR short_desc LIKE '%$searchValue%' OR cena LIKE '%$searchValue%')";
}

$sql = "SELECT * FROM events WHERE $whereClause ORDER BY event_date DESC";
$result = $conn->query($sql);
?>

<div class="container">
    <div class="row events-grid">
        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
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
        } else {
            echo "<div class='results_item'>Brak wydarzeń</div>";
        }

        $conn->close();
        ?>
    </div>
</div>
