<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>opdarcht 14</title>
</head>

<body>
    <?php
    $miles = 20;
    $km = 1.609;
    echo "<table border='1'>";
    echo "<thead>
    <th>miles</th>
    <th>km</th>
    </thead>";
    for ($m = 1; $m <= $miles; $m++) {
        echo "<tr>";
        echo "<td>$m</td>";
        echo "<td>" . ($m * $km) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>

</html>