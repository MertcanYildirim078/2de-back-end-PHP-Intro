<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hallo dag!</title>

<style>

    body{
        background-color: turquoise;
        padding-top: 150px;
    }

    #tijd, #goedeDag {
        color: green;
        margin-left: 44%;
    }


</style>

</head>
<body>

<?php

$timezone = date_default_timezone_set("Europe/Madrid");
$date = date("H:i");

if ($date >= "06:00" && $date <= "12:00") {
    echo "<h1 id = 'goedeDag'>Goede morgen!</h1>";
}
    else if ($date >= "12:00" && $date <= "18:00") {
        echo "<h1 id = 'goedeDag'>Goede middag!</h1>";
    }
        else if ($date >= "18:00" && $date <= "00:00") {
            echo "<h1 id = 'goedeDag'>Goede avond!</h1>";
        }
            else if ($date >= "00:00" && $date <= "06:00") {
                echo "<h1 id = 'goedeDag'>Goede nacht!</h1>";
            }

echo "<h1 id = 'tijd'>Het is nu $date</h1>";

?>

</body>
</html>
