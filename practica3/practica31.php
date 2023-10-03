<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    echo "<ul>";
    $comensals = array();
    for ($i = 0; $i < 10; $i++) {
        array_push($comensals, rand(0, 5));
    }

    for ($a = 0; $a < 10; $a++) {
        if ($comensals[$a] == 0)
            echo "<li>" . "La taula " . $a . " està buida" . "</li>";
        else if ($comensals[$a] == 5)
            echo "<li>" . "La taula " . $a . " està plena" . "</li>";
        else
            echo "<li>" . "La taula " . $a . " té " . $comensals[$a] . " comensals" . "</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>