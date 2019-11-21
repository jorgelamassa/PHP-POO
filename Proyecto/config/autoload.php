<?php 
namespace config;
// clase autoload 
class autoload
{
    public static function run()
    {
        spl_autoload_register(function($class)
        {
            $ruta = str_replace('\\','/',$class).".php";
            if (is_readable($ruta))
            {
                include_once $ruta;     
            }
            // con este echo vemnos que clase esta incluyendo a travez del namesapce "echo $ruta;
        });
    }
}
?>