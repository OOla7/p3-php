<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set('Europe/Amsterdam');
    $hour = date("H")*1;
    $result = match ($hour) {
        7,8,9,10,11 => "het is ochtend",
        12,13,14,15,16,17 => "het is middag",
        18,19,20,21,22,23 => "het is avond",
        0,1,2,3,4,5 => "het is nacht",
    }

    echo $result
    ?>
</body>
</html>