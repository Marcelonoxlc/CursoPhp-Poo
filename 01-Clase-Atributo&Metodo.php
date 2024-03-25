<?php

     // Definición de la clase

    class Shinigamis{

        public $nombre="Ichigo"; // Definicion del atributo para la clase

        public int $edad=17; // Atributo con tipo de variable especificada

        public function Saludar(){ // Metodo de la clase
            return "El shinigami " . $this->nombre ." tiene " . $this->edad . " años";
        }

    }

    // Instanciar un nuevo objeto

    $ichigo = new Shinigamis(); // Se intancia un nuevo objeto Shinigami

    echo $ichigo->nombre; // accedemos al atributo nombre de la clase a la que el objeto pertenece
    echo "<br>";
    echo $ichigo->edad;
    echo "<br>";
    echo $ichigo->Saludar(); // accedemos al metodo Saludar de la clase a la que el objeto pertenece
    echo "<br>";


?>