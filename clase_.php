<?php
    /* PHP Orientado a Objetos - Traits
    =====================================================================================================
    Traits: framentos de codigoas que puedes ser  rehusado en clases los cuales pueden tener un poco de similitud 
    con una clase las clase pueden permitirse usar tantos traits como sea posiple simplemente 
    usamos " use personas_trai,trabajadores;" dentro de la clase;
    */
    /* creamos el traists puede contener atributos y metodos public,private,protected,abstract
    no puede llamarce igual q la classe */
    trait personas_trai
    {
        //atributos 
        public $nombre;
        // metodos 
        public function mostrar_nombre(){
            echo $this -> nombre;
        }   
        abstract function asignar_nombre($nombre);
    }
    /* creamos el traists puede contener atributos y metodos public,private,protected,abstract
    no puede llamarce igual q la classe */
    trait trabajadores
    {
        protected function mensaje()
        {
            echo "clase de traits trait trabajador ";
        }
    }

    /* declaramos la clase 
    */
    class personas_class
    {
        // llamado al traits 
        use personas_trai,trabajadores;
        // metodos  de la clase para poder acceder al los metodo private o protecte self::xxxx();  
        public function asignar_nombre($nombre)
        {
            $this -> nombre = $nombre . self::mensaje();
        }
    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class*/ 
    $personas = new personas_class();
    // para acceder a los metodos dew la clase y de los traits
    $personas -> asignar_nombre("jorge la massa");
    $personas -> mostrar_nombre();
?> 