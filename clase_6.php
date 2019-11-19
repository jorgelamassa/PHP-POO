<?php


class pagina{
    //atributos     
    public $nombre = "bienvenido a codigo facilito";
    public static $url = "https://codigofacilito.com/videos/php_orientado_a_objetos_static";
    //metodo
    public function bienvenido()
    {
        echo "<p> bienvenido". $this -> nombre ."la pagina es ". self::$url. "</p>";
    }

    public static function bienvenido2()
    {
        echo "<p> bienvenido a: ". self::$url. "</p>";
    }

}
class web extends pagina{

}

//$pagina = new pagina();
//$pagina -> bienvenido();

web::bienvenido2();


?>