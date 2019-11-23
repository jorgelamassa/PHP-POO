<?php namespace config;

class enrutador
{
    public static function run(request $request)
    {   
        // recibimos de la config de resquest del metodo get_controller
        $controlador = $request -> get_controller() . "controller";
        //print "controller:".$controlador;
        // armanos la ruta 
        $ruta = ROOT . "controller" . DS .$controlador.".php";
        // pasamos el metod que recibimos de resquest del metodo get_metodo
        $metodo = $request -> get_metodo();
        //print "metodo:".$metodo;
        //print "ruta:".$ruta;
        //si estamos en el index.php le decimos al metodo que sea index
        if  ($metodo == "index.php")
        {
            $metodo = "index";
        }
        // le pasamos a argumento lo que recibimos de resquest del metodo get_argumento
        $argumento = $request -> get_argumento();
        //print "argumento:".$argumento;
        // si la el archivo es leible que nos indica la ruta creada lo requerimos 
        if(is_readable($ruta))
        {
            require_once ($ruta);
            $mostrar = "controller\\" . $controlador;
            //print $mostrar;
            $controlador = new $mostrar;
            if (!isset($argumento))
            {
                $datos = \call_user_func(array($controlador,$metodo));
            }
            else
            {
                $datos = \call_user_func(array($controlador,$metodo),$argumento);
            }
        }

        // cargar vista
        $ruta = ROOT."view".DS.$request-> get_controller().DS.$request->get_metodo().".php";
        
        if(is_readable ($ruta))
        {
            require_once $ruta;
        }
        else{
            echo "404 Not Found: el archivo no esta en la ruta o no exite =  ".$ruta;
        }
    }
}
?>