<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $oudePrijs = 150;
    $nieuwPrijs = $oudePrijs + (0,19 * $oudePrijs);

    echo "<p> de nieuwe prijs is: €" . numfmt_format($nieuwPrijs, 2)."</p>"
    ?> 
</body>
</html>