<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profesores</title>
</head>
<body>
    <?php
        include "lib/libreriaProfesores.php";

        $roma = array("paco", "maria", "mariano", "antonio" ,"manolo", "manuel", "angel");
        $polonia = array("jerónimo", "mercedes", "nuria", "javier" ,"andrés", "montse", "marcos");

        $dublin = array("paco","sebastian","marta","pepe","antonio","miriam","jerónimo","daniel","marcos");

        echo limpiarArrayRepetidos($roma, $polonia, $dublin);

        $viajes = array("paco","mariano","mariano","mercedes","jose","paco","jesus","paco");

        echo contarRepesArray($viajes);
    ?>
</body>
</html>