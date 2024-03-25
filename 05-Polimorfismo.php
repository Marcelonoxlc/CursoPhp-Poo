<?php

//Polimorfiamo: Capacidad del metodo para comportarse de distinta forma en distintas clases

class Grupo{

    public $nombre; 

    public function __construct($nombre){
        $this->nombre=$nombre;

    }

    public function Mensaje($texto){
        return $texto . $this->nombre;
    }

}

$espadas = new Grupo("Espadas");

echo $espadas->Mensaje("El ejercito de elite de hollows se llama ");

echo "<br>";



//Nueva clase----------------------------------------------------------------------------------------------------------------------------------

class Ejercito extends Grupo{

    public function Mensaje($texto){
        return $this->nombre . $texto;
    }

}

$gotei13 = new Ejercito("Gotei13");

echo $gotei13->Mensaje(" es el ejercito encargado de proteger almas");

echo "<br>";



?>