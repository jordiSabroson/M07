<!DOCTYPE html>
<html>

<head>
    <meta charset="utf8">
    <title>PRÀCTICA 1 - KURT CAGLE</title>
</head>

<body>
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
    
</body>

</html>