<?php
    require_once  ("config/autoload.php");
    config\autoload::run();
    $estudiante = new models\estudiante();
    //$estudiante -> hola();
    $estudiante -> set("id_estudiante",112);
    $datos = $estudiante -> view_studen();
    echo $datos['nombre_studen']."-".$datos['id_estudiante'];
?>