<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdarcht 10</title>
</head>

<body>
    <?php
    $getal = 12;
    $total = 0;

    for ($i = 1; $i <= $getal; $i++) {
        $total+= $i;
        echo $i . ($i < $getal ? "+" : " = $total");
    }
    ?>
</body>

</html>