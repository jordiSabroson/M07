<!DOCTYPE html>
<html>

<head>
    <title>Pràctica 3</title>
</head>

<body>
    <!-- EXERCICI 1 -->
    <ul>
        <?php
        $comensals = array();                           // Creació de l'array
        for ($i = 0; $i < 10; $i++) {
            array_push($comensals, rand(0, 5));         // Bucle que afegeix 10 valors aleatoris de l'1 al 5 dins de l'array
        }

        for ($i = 0; $i < 10; $i++) {                   // Bucle per imprimir l'array. Si hi ha 0 comensals, la taula
            if ($comensals[$i] == 0) {                  // estarà buida, si té 5 estarà plena, i si té comensals, indica quans hi ha
        ?>
                <li> <?php echo "La taula " . $i . " està buida"; ?> </li>
            <?php
            } else if ($comensals[$i] == 5) {
            ?>
                <li> <?php echo "La taula " . $i . " està plena"; ?> </li>
            <?php
            } else {
            ?>
                <li> <?php echo "La taula " . $i . " té " . $comensals[$i] . " comensals"; ?> </li>
        <?php
            }
        }
        ?>
    </ul>

    <!-- EXERCICI 2 -->
    <?php
    echo "<ul>";
    
    $planta = array();              // Array multidimensional que guardarà 5 plantes d'hotel, que cada una té 10 habitacions i en cada habitació
                                    // poden haver de 0 a 4 clients 
    for ($p = 0; $p < 5; $p++) {
        // Iteració per planta
        $habitacions = array();

        for ($h = 0; $h < 10; $h++) {
            //Iteració per habitació
            $clients = rand(0, 4);                      // Número random de clients per habitació
            array_push($habitacions, $clients);         // array push de núm de clients a l'array habitació
        }
        array_push($planta, $habitacions);             // cada 10 iteracions per habitació, es fa array push de l'array habitació a l'array planta
    }

    // Imprimir l'array
    for ($i = 0; $i < 5; $i++) {
        for ($a = 0; $a < 10; $a++) {
            if ($planta[$i][$a] == 0) {
                echo "<li>L'habitació ".$a." de la planta ".$i." està buida</li>"; 
            }   else if ($planta[$i][$a] == 4) {
                echo "<li>L'habitació ".$a." de la planta ".$i." està plena</li>";
            }   else {
                echo "<li>L'habitació ".$a." de la planta ".$i. " té ".$planta[$i][$a]." persones</li>";
            }
        }
        echo "<br>";
    }
    echo "</ul>";
    ?>

</body>

</html>