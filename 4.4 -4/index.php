<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  $oudeprijs1 = 180;
  $oudeprijs2 = 35;
  $oudeprijs3 = 120;
  
  if ($oudeprijs1 > 150) {
    $korting = $oudeprijs1 / 100 * 19;
    $oudeprijs1 = $korting + $oudeprijs1;
echo"Oude prijs: 180. Na verhoging van 19% is de prijs veranderd naar: $oudeprijs1";
  }

  if ($oudeprijs2 < 55) {
    $korting = $oudeprijs2 / 100*11;
    $oudeprijs2 = $korting + $oudeprijs2;
    echo"oude prijs : 35. Na verhoging van 11% is de prijs veranderd naar : $oudeprijs2";
  }
  $korting = $oudeprijs3 / 100 * 16;
  $oudeprijs3 = $korting + $oudeprijs3;
  echo"oude prijs: 120. Na verhoging van 11%is de prijs veranderd naar : $oudeprijs3";

  ?>
</body>
</html>