<!DOCTYPE html>
<html>

<head>
    <title>Pràctica 3</title>
</head>

<body>
    <!-- EXERCICI 1 --> 
    <?php
    echo "<ul>";
    $comensals = array();                           // Creació de l'array
    for ($i = 0; $i < 10; $i++) {
        array_push($comensals, rand(0, 5));         // Bucle que afegeix 10 valors aleatoris de l'1 al 5 dins de l'array
    }

    for ($i = 0; $i < 10; $i++) {                   // Bucle per imprimir l'array. Si hi ha 0 comensals, la taula
        if ($comensals[$i] == 0)                    // estarà buida, si té 5 estarà plena, i si té comensals, indica quans hi ha
            echo "<li>La taula " . $i . " està buida</li>";
        else if ($comensals[$i] == 5)
            echo "<li>La taula " . $i . " està plena</li>";
        else
            echo "<li>La taula " . $i . " té " . $comensals[$i] . " comensals</li>";
    }
    echo "</ul>";
    ?>

    <!-- EXERCICI 2 -->
    <?php 
    echo "<ul>";
    $hotel = array();
    for ($planta = 0; $planta < 5; $planta++) {
        array_push($hotel, array());
        for ($habitacio = 0; $habitacio < 10; $habitacio++) {
            array_push($hotel[$planta], rand(0,4));
        }
    }

    for ($i = 0; $i < 5; $i++) {
        for ($a = 0; $i < 10; $a++) {
            if ($hotel[$i][$a] == 0)
                echo "<li>L'habitació ".$i." de la planta ".$a." està buida</li>";
            else if ($hotel[$i][$a] == 4)
                echo "<li>L'habitació ".$i." de la planta ".$a." està plena</li>";
            else
                echo "<li>L'habitació ".$i." de la planta ".$a." té ".$hotel[$i][$a]." persones</li>";
        }
    }
    echo "</ul>";
    ?>

</body>

</html>