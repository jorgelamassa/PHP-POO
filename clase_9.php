<?php
//PHP Orientado a Objetos - Autoload
//http://localhost/php_poo/clase_9.php?action=clases se debe pasar el nombre de la carpeta por la url 
$_GET['action'];
function autoload($clase)
    {
        include $_GET['action']."/". $clase .".php";   
    }
spl_autoload_register('autoload');
auto::mostrar("clase php poo");
personas::mostrar("alumno la massa jorge");

?>