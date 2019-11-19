<?php
$_GET['action'];
function autoload($clase){
    include $_GET['action']."/". $clase .".php";   
}

spl_autoload_register('autoload');
auto::mostrar("clase php poo");
personas::mostrar("alumno la massa jorge");

?>