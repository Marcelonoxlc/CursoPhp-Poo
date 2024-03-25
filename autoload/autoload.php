<?php

spl_autoload_register(function ($className) {
    // Transforma el namespace y el nombre de clase en una ruta de archivo
    $file = __DIR__ . '/src/' . str_replace('\\', '/', $className) . '.php';
    
    // Comprueba si el archivo existe y lo incluye
    if (file_exists($file)) {
        require_once $file;
    }
});
