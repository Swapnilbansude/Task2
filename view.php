<?php
echo "<h3>Student Data</h3>";

echo "<table>";

$file = fopen("one.csv", "r");

while (($data = fgetcsv($file)) !== false) {
    echo "<tr>";
    foreach ($data as $i) {
        echo "<td> \t" . htmlspecialchars($i) . "</td>";
    }
    echo "</tr>";
    echo "\n";
}

fclose($file);
echo "</table>";

?>