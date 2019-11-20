<?php
    //  PHP Orientado a Objetos - Static
    /* 
    en la programacion orientada a objetos todo se define como un objeto,
    "la clase sera como el molde del objeto" que pose atributos y metodos.
    =======================================================================*/
    /* 
    un metodo pertenece a la clase pero no puede acceder a los atributos a distancia
    y se puede llamar a un metodo sin tener que crear un objeto de dicha clase
    */
    class pagina {
        //atributos     
        public $nombre = "bienvenido a codigo facilito";
        public static $url = "https://codigofacilito.com/videos/php_orientado_a_objetos_static";
        //metodo 
        public function bienvenido()
        {
            echo "<p> bienvenido". $this -> nombre ."la pagina es ". self::$url. "</p>";
        }
        // al ponerle la propiedad estatica podemos acceder este meto sin 
        public static function bienvenido2()
        {
            echo "<p> bienvenido a: ". self::$url. "</p>";
        }

    }
    class web extends pagina{

    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class*/ 
    $pagina = new pagina();
    $pagina -> bienvenido();

    // para acceder a un metodo statico lo usaremos a si nombreclass::nombre_metodo_estatico()
    web::bienvenido2();
    
?>