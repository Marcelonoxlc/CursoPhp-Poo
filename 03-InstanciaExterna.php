<?php
    require_once "02-MetodoConstructor.php"; // Incluimos el archivo externo que tiene la clase

    // Dado los ejemplos anteriores, tambien se incluiran en esta vista al ser traidos

    echo "<br>";

    // Ejemplo de nueva instancia

    $mayuri = new Shinigami("Mayuri","Konjiki Ashisogi Jizo");


    echo $mayuri->Mostrar();

    echo "<br>";

?>