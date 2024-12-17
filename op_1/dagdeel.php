<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 1</title>
</head>

<body>
    <?php
    $dagdeel1 = date("H") + 1;
    echo "Het is ";
    if ($dagdeel1 > 6 && $dagdeel1 < 12) {
        echo 'ochtend';
    } elseif ($dagdeel1 > 12 && $dagdeel1 < 18) {
        echo 'middag';
    } elseif ($dagdeel1 > 18 && $dagdeel1 < 0) {
        echo 'avond';
    } elseif ($dagdeel1 > 0 && $dagdeel1 < 6) {
        echo 'nacht';
    };
    echo "<br>";
    echo $dagdeel1;
    ?>
</body>

</html>