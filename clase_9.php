<?php
    /* PHP Orientado a Objetos - Autoload
    =====================================================================================================
    spl_autoload_register: tener que hacer largas listas de include se puede definir una función que es automáticamente invocada 
    en caso de que se este intenato usar una clase o una ointerface que todavia no haya sido definida,
    al invocar esta funcion el motor de scritin da una ultima oportunidad antes de q php incurra en un error fatal 
    */
    //http://localhost/php_poo/clase_9.php?action=clases se debe pasar el nombre de la carpeta por la url 
    $_GET['action'];
    // con este metodo invocamos las clase que esta en le fichero clases
    function autoload($clase)
        {
            include $_GET['action']."/". $clase .".php";   
        }
    // invocamos las clase de nuestra autoload    
    spl_autoload_register('autoload');
    // de esta forma accedemos a los metodos de las clase autoload register ya que busca por el nombre dle metodo
    auto::mostrar("clase php poo");
    personas::mostrar("alumno la massa jorge");
?>