<?php
//PHP Orientado a Objetos - Traits
    trait personas_trai{
        //atributos 
        public $nombre;
        // metodos 
        public function mostrar_nombre(){
            echo $this -> nombre;
        }   
        abstract function asignar_nombre($nombre);
    }

    trait trabajadores{
        protected function mensaje(){
            echo "clase de traits trait trabajador ";
        }
    }
    class personas_class{
        // llamado al traits 
        use personas_trai,trabajadores;
        // metodos    
        public function asignar_nombre($nombre){
            $this -> nombre = $nombre . self::mensaje();

        }
    }

    //cremos el objeto con
    $personas = new personas_class();
    $personas -> asignar_nombre("jorge la massa");
    $personas -> mostrar_nombre();

?> 