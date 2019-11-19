<?php

class saludo{

    //Atributos 
    public $nombre = "pedro";
    //metodos
    public function hablar ($mensaje)
    {
        echo $mensaje;
    }
    
}
    $saludo = new saludo();
    // echo  $saludo -> nombre;
    $saludo ->hablar("saludos desde el curso");

?>