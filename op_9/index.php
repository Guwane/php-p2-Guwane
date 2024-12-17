<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 9</title>
</head>
<body>
    <?php
    $zijde1 = 2;
    $zijde2 = 2;
    $zijde3 = 1;

if ($zijde1 && $zijde2 > $zijde3) {
    echo "Zijde 1: " . $zijde1 . "cm <br>";
    echo "Zijde 2: " . $zijde2 . "cm <br>";
    echo "Zijde 3: " . $zijde3 . "cm <br>";
    echo 'kan wel!';
}else {
    echo 'kan niet!';
}

    ?>
</body>
</html>