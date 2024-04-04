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
    if ($hour >=6 && $hour < 12){
        echo "het is ochtend.";
    }
    else if ($hour >= 12 && $hour < 18){
        echo "het is middag.";
    }
    else if ($hour >= 18 && $hour < 24){
        echo "het is avond.";
    }
    else if ($hour >= 24 && $hour < 6){
        echo "het is nacht.";
    }

    ?>
</body>
</html>