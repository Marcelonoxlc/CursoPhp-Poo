<?php

    // Modificadores de acceso


    class Example{

        public $ejemplo; // Se puede acceder desde cualquier parte del programa, incluyendo otras clases e instancias

        protected $ejemplo3; // Acceso desde la misma clase y de las clases que se heredan

        private $ejemplo2; // Acceso solo desde la clase a la que perteneces
        


    }


    // Ejemplo practico------------------------------------------------------------------------------------------------------------

    class Arma{

        protected $nombre; // Atributo protegido

        public function __construct($nombre)
        {
            $this->nombre=$nombre;
        }



    }

    class Zampakuto extends Arma{   // Generamos la herencia

        public function texto($cadena){ // El metodo en creado en la clase zampakuto puede acceder al atributo de la clase Arma
        return $this->nombre . $cadena; // debido a la herencia
        }

        

    }

    $zangetsu = new Zampakuto("Zangetsu");

    echo $zangetsu->texto(", es el arma de Ichigo"); // Accedemos al atributo a traves de la funcion

    //echo $zangetsu->nombre;   // AL intentar acceder de esta forma el codigo nos dara un error

    //---------------------------------------------------------------------------------------------------------------------------------

    class Kido{

        private $tipo;

        public function __construct($nombre)
        {
            $this->tipo=$nombre;
        }

        public function salida($mensaje){
            return $this->tipo . $mensaje;
        }


    }

    echo "<br>";

    $hado = new Kido("Hado");

    echo $hado->salida(" es el kido mas usado por Aizen"); // Accedemos al atributo a traves de la funcion
 

?>