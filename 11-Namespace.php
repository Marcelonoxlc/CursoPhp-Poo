<?php

    require 'namespaces/archivo1.php'; // Incluimos ambos archivos
    require 'namespaces/archivo2.php';

    use Espanol\Saludo as SaludoEspañol; //Llamamos a ambas clases, y damos nombre que lo diferencie
    use Ingles\Saludo as SaludoInglés;

    // Crear instancias y llamar a los métodos de cada clase
    $español = new SaludoEspañol(); // Instanciamos ambas clases
    $inglés = new SaludoInglés();

    $español->holaMundo(); // Ambos metodos tienen el mismo nombre pero los resultados son distintos
    $inglés->holaMundo(); 

?>