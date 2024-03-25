<?php

    // Similar a las clases, tiene por objetivo agrupar funcionalidades especificas. No se pueden instanciar
    // Solo facilitan comportamientos(funciones) a las clases sin necesidad de usar herencia

    require_once "traits/habilidadSimple.Php"; // Importamos el archivo que trae el trait

    class Personaje{

        public $nombre="Komamura";

        use TecnicasSimples; // Señalamos el trait que usaremos

    }

    $capitan = new Personaje;

    echo $capitan->nombre . $capitan->AumentarDefensa();

    echo "<br>";


    //-------------------------------------------------------------------------------------------------------------------------

    //Ejemplo en una clase con herencia

    class Sujeto extends Personaje{ 
    }

    $shinigami = new Sujeto;

    echo $shinigami->nombre . $shinigami->AumentarReiatsu();
?>