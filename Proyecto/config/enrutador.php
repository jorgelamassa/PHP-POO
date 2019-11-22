<?php namespace config;

class enrutador
{
    public static function run(request $request)
    {
        $controlador = $request -> get_controller() . "controller";
        //print "controller:".$controlador;
        $ruta = ROOT . "controller" . DS .$controlador.".php";
        $metodo = $request -> get_metodo();
        //print "metodo:".$metodo;
        //print "ruta:".$ruta;
        if  ($metodo == "index.php")
        {
            $metodo = "index";
        }
        $argumento = $request -> get_argumento();
        //print "argumento:".$argumento;
        if(is_readable($ruta))
        {
            require_once ($ruta);
            $mostrar = "controller\\" . $controlador;
            $controlador = new $mostrar;
            if (!isset($metodo))
            {
                \call_user_func(array($controlador,$metodo));
            }
            else
            {
                \call_user_func(array($controlador,$metodo),$argumento);
            }
        }
    }
}
?>