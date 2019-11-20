<?php
    /* PHP Orientado a Objetos - Clases & Metodos abstractos
    en la programacion orientada a objetos las class abstrata tiene por objetivo agrupar 
    atributos y metodos q luegon sera heredado por otra sub clase 
    =======================================================================
    1. nos e pueden intanciar
    2. deben ser deffinido los metod en la clase abstrata
    */

    // asi definimos class abstrata
    abstract class molde{        
        //metodos de clase abstrata "recordar llamrlo en la clase q los heredas"
        abstract public function ingresar_nombre($nombre);
        abstract public function obtener_nombre();
    }
    // asi definimos class y le heredamos la clase abstrata
    class persona extends molde
    {
       //atributos pueden public private protecte
        private $mensaje = "clase 8 de php.";
        private $nombre;
       //metodos de la class
        public function mostrar()
        {
            echo $this -> mensaje;
        }
        // llamado de metodo de clase abstrata heredada
        public function ingresar_nombre($nombre,$username = ' la massa')
        {
            $this -> nombre = $nombre . $username;  
        }
        // llamado de metodo de clase abstrata heredada
        public function obtener_nombre()
        {
            echo " el nombre es del alumno es: " .$this -> nombre; 
        }
    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class 
    llamamos a la clase q no es abstrata  */ 
    $obj = new persona();
    // invocamos los metodos de la clase heredados y no heredados
    $obj -> mostrar();
    $obj -> ingresar_nombre("jorge");
    $obj -> obtener_nombre();
?>