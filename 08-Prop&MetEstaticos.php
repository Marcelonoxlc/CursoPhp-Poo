<?php

    // Si una propiedad o metodo es estatico, es accesible sin necesidad de instanciar la clase

    // Siempre son public
    
    // No puede ser accedida con un objeto de la clase instanciada

    // Un metodo estatico no puede acceder a los atributos normales de la clase

    //------------------------------------------------------------------------------------------------------------------------------------

    class Shikai{

        public static $nombre="Kenpachi"; // atributo estatico

        public static $teniente="Yachiru";

        public static function Liberar(){ // metodo estatico
            return "Nozarashi";
        }

        public static function Mostrar(){ // este metodo se usa para acceder a un metodo estatico
            return self::$teniente; // forma de acceder al metodo estatico (no funciona con metodos normales)
        }



    }

    echo Shikai::$nombre; // no se requiere instanciar el objeto para acceder a la propiedad
    echo "<br>";
    echo Shikai::Liberar(); // tampoco es necesario instanciar, dado que tanto el atributo como el metodo son estaticos
    echo "<br>";
    echo Shikai::Mostrar();

    


?>