<?php

    abstract class molde{
        //atributos
        
        //metodos
        abstract public function ingresar_nombre($nombre);

        abstract public function obtener_nombre();
    }
    
    class persona extends molde
    {
       //atributos
        private $mensaje = "clase 8 de php.";
        private $nombre;
       //metodos
        public function mostrar()
        {
            echo $this -> mensaje;
        }

        public function ingresar_nombre($nombre,$username = ' la massa')
        {
           $this -> nombre = $nombre . $username;  
        }

        public function obtener_nombre()
        {
           echo " el nombre es del alumno es: " .$this -> nombre; 
        }
    }

    $obj = new persona();
    $obj -> mostrar();
    $obj -> ingresar_nombre("jorge");
    $obj -> obtener_nombre();
?>