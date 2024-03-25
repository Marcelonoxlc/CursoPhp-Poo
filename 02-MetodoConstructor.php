<?php

    // Un metodo constructor permite que el manejo de atributos sea dinamico

    class Shinigami{

        public string $nombre; 

        public string $bankai;

        public function __construct($nombre,$bankai){ // Metodo constructor, en este caso recibe 2 parametros
            $this->nombre=$nombre;
            $this->bankai=$bankai;
        }

        public function Mostrar(){
            return $this->nombre . " es shinigami, su bankai es " . $this->bankai;
        }

    }


    $ichigo = new Shinigami("Ichigo","Tensa Zangetsu");// Se instancia el objeto y entregamos los parametros que recibe el metodo constructor
    $rukia= new Shinigami("Rukia","Haka no Togame"); 

    echo $ichigo->Mostrar();

    echo "<br>";

    echo $rukia->Mostrar();

    echo "<br>";


    // Forma 2 --------------------------------------------------------------------------------------------------------------------------------

    class Hollow{

        public string $nombre; 

        public string $resurreccion;

        public function __construct($nombre,$resurreccion){
            $this->nombre=$nombre;
            $this->resurreccion=$resurreccion;
        }

        public function Mensaje($texto, $texto2){ // Esta vez la funcion recibe parametros
            return $texto . $this->nombre . $texto2 . $this->resurreccion; // Concatenamos los parametros y los atributos
        }

    }


    $ulquiorra = new Hollow("Ulquiorra","Murcielago");// Se instancia el objeto y entregamos los parametros que recibe el metodo constructor
    $stark= new Hollow("Stark","Los lobos"); 

    echo $ulquiorra->Mensaje("Soy el cuarto espada ", " y mi resurrecion es "); // Entregamos los dos valores a los parametros de la funcion

    echo "<br>";

    echo $stark->Mensaje("Soy el primer espada ", " y mi resurrecion es ");


    // Forma 3 -----------------------------------------------------------------------------------------------------------------------------

    class Quincy{

        public string $nombre; 

        public function __construct($nombre){
            $this->nombre=$nombre;
        }

        public function Mensaje($texto="Soy el orgulloso quincy "){ // Esta vez definimos el valor del parametro directamente
            return $texto . $this->nombre;
        }

    }


    $uryu = new Quincy("Uryu");

    
    echo "<br>";

    echo $uryu->Mensaje(); // Si se entrega un parametro a Mensaje, predomina el valor que se entrega y no el definido en el metodo

    

?>  