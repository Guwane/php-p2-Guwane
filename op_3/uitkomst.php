<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdaacht 3</title>
</head>

<body>
    <?php
    $a = 65;
    $b = 37;
    if ($a > $b) {
        $result = $a * 2 + $b;
    } else {
        $result = $b * 2 + $a;
    };
    echo "Uitkomst: " . $result;
    ?>
</body>

</html>