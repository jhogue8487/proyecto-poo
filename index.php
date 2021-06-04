<?php

    //constantes definidas, URL amigables.
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)) . DS);
    define('URL', "http://www.proyecto-poo.test/");
    //define('URL', "http://localhost/Proyecto_poo/");
    require_once "Config/Autoload.php";
    Config\Autoload::run();
    //no es correcto llamar modelos de este archivo, son de prueba.
    //$est = new Models\Estudiante();
    require_once "Views/template.php";//creado despues de request, hay que llamarlo antes de request.   
    //new Config\Request();//este valor lo pasamos como parametro al enrutador.
    Config\Enrutador::run(new Config\Request());

?>
