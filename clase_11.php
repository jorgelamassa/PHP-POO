<?php
    /* PHP Orientado a Objetos - Namespaces
    =====================================================================================================
    namespaces: nos ayudan a colocar "sub nombres"  a nuestros archivos clases o funciones 
    ejemplo de los namespace cambiar una clase de registro a registro estudiante por que ya existia registro 
    y por ello teniamos coalision
    namespace models;  asi declaramos un namespace se debe colocar antes de codigo php o html
    */ 
    //require_once  ("models/personas.php");
    //require_once  ("controllers/personasControllers.php");


    spl_autoload_register(function($clase)
    {
        //$ruta = "models/".$clase;
        $ruta = str_replace('\\',"/",$clase).".php";
        //echo $ruta;
        if (is_readable($ruta))
        {
            require_once $ruta;
        }
        else
        {
            echo $ruta;  
        }
    });

    models\personas::hola();
    controllers\personasControllers::hola();

    
?> 