<?php

$table = [
    ["Name", "Age", "City"],
    ["John", 30, "New York"],
    ["Jane", 25, "Los Angeles"],
    ["Mike", 40, "Chicago"]
];

echo "<table border='1'>";
foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";


