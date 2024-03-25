<?php

    // Se usa parent para acceder a una constante o metodo estatico de la clase padre

    class Reiatsu{ //Clase padre

        const PRESION="Alta"; // Por nomenclatura se escribe todo en mayusculas

    }

    //----------------------------------------------------------------------------------------------------


    class Reishi extends Reiatsu{ // hereda la propiedad de la clase padre

        public static function espiritu(){ // metodo de la clase Reishi
            return parent::PRESION; // Accede a la constante de la clase padre
        }

    }

    echo Reishi::PRESION;

    echo "<br>";

    echo Reishi::espiritu(); // A traves de la clase reishi y su metodo llegamos al valor de la constante de la clase padre






?>