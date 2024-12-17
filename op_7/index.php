<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht 7</title>
</head>

<body>
    <?php
    $spaargeld = 1100;
    $iphone = 1000;
    $verschil = $iphone - $spaargeld;

    if ($spaargeld >= $iphone) {
        $over = $spaargeld - $iphone;
        echo "je hebt genoeg geld, dit is er over $" . $over;
    } elseif ($verschil <= 250 ) {
        echo "je hebt net niet genoeg nog even door sparen -$" . $verschil;
    } else {
        echo "meer werken kkr hond je komt veel te kort -$" . $verschil;
    };
    ?>
</body>

</html>