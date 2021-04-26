<?php
echo "<table >";
foreach ($countries as $country) {
    echo "<tr>";
    echo "<td>" . $country->Name . "</td>";
    echo "<td>" . $country->Code . "</td>";
    echo "<td>" . number_format($country->Population, 0, ',', ' ') . "</td>";
    echo "</tr>";
}
echo "</table>";
