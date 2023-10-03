<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title>PRÀCTICA 1 - KURT CAGLE</title>
</head>

<body>

    <!-- PRÀCTICA 1 -->
    <?php
        $nom = "Kurt";
        $cognom = "Cagle";
        $edat = 40;
        $data = new DateTime();
        $data->setDate(1983, 05, 12);
        $telefon= array(654332211,933332211);
        $adreçaPostal = "Carrer de turin, 15";
        $correu = "kurt.cagle@example.com";
        $treballa = true;
        $alçada = 1.67;
    ?>

    <h1><b>Descrivint a Kurt Cagle</b></h1>
    <h2><b>Les dades de Kurt son:</b></h2>
    <ul>
        <li>Es diu: <?php echo $nom ?></li>
        <li>Té <?php echo $edat ?> anys</li>
        <li>Va néixer l'any: <b><?php echo $data->format('Y-m-d') ?></b></li>
        <li>Els seus telèfons són: <?php echo $telefon[0] ?> - <?php echo $telefon[1] ?></li>
        <li>Viu a: <?php echo $adreçaPostal ?></li>
        <li>El seu email és: <?php echo $correu ?></li>
        <li>Treballa: <?php echo $treballa ? "Si" : "No" ?></li>
        <li>I medeix: <?php echo $alçada ?></li>
    </ul>


    <!-- PRÀCTICA 2 -->

    <?php
        define("IVA", 1.21); 

        $cursos = array (
            "id" => array(1, 2, 3),
            "nom" => array("PHP", "Laravel", "Django"),
            "desc" => array("Introducció a PHP", "Laravel per a experts", "Dominant Django"),
            "preu" => array(15.5, 30, 10)
        );

        $numCursos = count($cursos) - 1 ;
    ?>
    <h1>Llista de cursos</h1>
    <h2>Número de cursos apuntats: <?php echo $numCursos ?> </h2>
    <?php
        for ($i = 0; $i < $numCursos; $i ++) {   
            echo '<div style="border: 1px solid black; width: 350px">'; 
            echo '<img src="img/'.$i.'.png" style="height: 55px; width: 65px;">';
            echo '<h3>'.$cursos["nom"][$i].'</h3>';
            echo '<p>'.$cursos["desc"][$i].'</p>';
            echo '<p>El preu del llibre amb IVA: '.$cursos["preu"][$i] * IVA.'</p>';
            echo '</div>';
        }
        
    ?>
    </div>
    
</body>

</html>