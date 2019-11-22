<?php
// para trabajar url amigables y a la hora generar constate y llamar archivos nesecitamos esta configuracion
DEFINE('DS', DIRECTORY_SEPARATOR); 
DEFINE('ROOT', realpath(dirname(__FILE__)).DS); 
//use config\request;

require_once  ("config/autoload.php");
    config\autoload::run();

    //$estudiante = new models\estudiante();
    //$estudiante -> hola();
    //$estudiante -> set("id_estudiante",112);
    //$datos = $estudiante -> view_studen();
    //echo $datos['nombre_studen']."-".$datos['id_estudiante'];
    //new config\request();
    config\enrutador::run(new config\request());
?>