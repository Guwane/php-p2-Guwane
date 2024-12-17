<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdarcht 2</title>
</head>

<body>
    <?php
    $dagdeel2 = date("H") + 1;
    $result = match ($dagdeel2) {
        6, 7, 8, 9, 10, 11 => "ochtend",
        12, 13, 14, 15, 16, 17 => "middag",
        18, 19, 20, 21, 22, 23 => "avond",
        0, 1, 2, 3, 4, 5, => "nacht",
        default => "unknown",
    };
    echo "Het is $result";
    echo "<br>";
    echo "$dagdeel2";
    ?>
</body>

</html>