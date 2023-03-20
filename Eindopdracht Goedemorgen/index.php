<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hallo dag!</title>

</head>
<body>

<?php

$timezone = date_default_timezone_set("Europe/Amsterdam");
$date = date("H:i");

if ($date >= "06:00" && $date <= "12:00") {
    echo "<h1 id = 'goedeDag'>Goede morgen!</h1>";
    $bgImage = "morning.png";
}
    else if ($date >= "12:00" && $date < "18:00") {
        echo "<h1 id = 'goedeDag'>Goede middag!</h1>";
        $bgImage = "afternoon.png";
    }
        else if ($date >= "18:00" && $date <= "23:59") {
            echo "<h1 id = 'goedeDag'>Goede avond!</h1>";
            $bgImage = "evening.png";
        }
            else if ($date >= "00:00" && $date <= "06:00") {
                echo "<h1 id = 'goedeDag'>Goede nacht!</h1>";
                $bgImage = "night.png";
            }

echo "<h1 id = 'tijd'>Het is nu $date</h1>";

?>

<style>

    body{
        padding-top: 150px;
        background-image: url(<?= $bgImage ?>);
    }

    #tijd, #goedeDag {
        color: green;
        margin-left: 44%;
    }


</style>

</body>
</html>
