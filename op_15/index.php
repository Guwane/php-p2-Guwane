<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdarcht 15</title>
</head>

<body>
    <?php
    for ($i = 1; $i < 7; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
    echo "<br>";
    for ($i = 6; $i >= 1; $i--) {
        for ($l = 1; $l <= $i; $l++) {
            echo $l . " ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>