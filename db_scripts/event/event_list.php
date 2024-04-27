<?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
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
                echo "<tr><td colspan='10'>Brak wydarzeń</td></tr>";
            }
            
          
            
            ?>