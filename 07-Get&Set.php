<?php

    // Metodos que permiten a un objeto controlar el acceso a ciertas propiedades de la clase (protegidas o privadas)

    // Getter: Permite obtener el valor de una propiedad de la clase y asi usar dicho valor en diferentes metodos
    
    // Setter: Brinda acceso a propiedades especificas para poder asignar un valor fuera de la clase

    //------------------------------------------------------------------------------------------------------------------------------------

    class Ciudad{

        private $nombre;

        public function __construct($nombre)
        {
            $this->nombre=$nombre;
        }

        public function salida($mensaje){
            return $this->nombre . $mensaje;
        }

        public function getNombre(){ // Por nomenclatura se usa get o set antes del atributo que se desea obtener
            return $this->nombre; 
        }

        public function setNombre($nombre){ 
            return $this->nombre=$nombre;
        }

    }

    $karakura = new Ciudad("Karakura"); // el objeto instanciado lleva por nombre karakura

    echo $karakura->getNombre(); // obtenemos el valor del atributo nombre

    echo "<br>";

    echo $karakura->setNombre("Rukongai"); // modificamos el valor del atributo nombre

?>