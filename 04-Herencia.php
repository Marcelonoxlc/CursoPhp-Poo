<?php

    class Persona{

        public $nombre; 

        public $raza;

        public function __construct($nombre,$raza){
            $this->nombre=$nombre;
            $this->raza=$raza;
        }

        public function Mensaje($texto){
            return $this->nombre . $texto . $this->raza;
        }

    }


    $orihime = new Persona("Orihime","Fullbringer");

    echo $orihime->Mensaje(" es una ");

    echo "<br>";


    //Nueva clase
    class Gikon extends Persona{ // Recibe los atributos y metodos de la clase Persona (accede a ellos dependiendo del tipo de acceso

        public function cambiar(){ // Nuevo metodo exclusivo de la clase Gikon
            if(true){
                $cambio = $this->raza="Humano";
            }

            return $this->nombre . " cambio a " . $cambio;
        }

    }

    $kon = new Gikon("Kon","Alma Modificada");

    echo $kon->Mensaje(" es un ");

    echo "<br>";

    // Ejemplo para ver el metodo nuevo

    echo $kon->cambiar();


?>