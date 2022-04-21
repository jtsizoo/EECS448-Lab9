<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table>";
for($i =1; $i <= 100; $i++) //Rows
{
    echo "<tr>";
    for($j = 1; $j <= 100; $j++) //Cols
    {
        $k = $j * $i;
        echo "<td>$k</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
