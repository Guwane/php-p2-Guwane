<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdarcht 4</title>
</head>
<body>
 <?php
$oudePrijs = 100;

if ($oudePrijs > 150) {
    $nieuwePrijs = $oudePrijs * 1.19;
} elseif ($oudePrijs < 55) {
    $nieuwePrijs = $oudePrijs * 1.11;
} else {
    $nieuwePrijs = $oudePrijs * 1.16;
}

 echo "Oude prijs: $" . $oudePrijs . ". Na verhoging is de prijs: $" . $nieuwePrijs . ".";
 ?>
</body>
</html>