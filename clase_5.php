<?php
    // PHP Orientado a Objetos - Herencia
    /* 
    en la programacion orientada a objetos todo se define como un objeto,
    "la clase sera como el molde del objeto" que pose atributos y metodos.
    =======================================================================*/
    /*
    SIGNIFICA QUE SE PUEDE CREAR NUEVAS CLASES PARTIENDO DE CLASE EXISTENTE 
    EJEMPLO:
                    VEHICULOS
                   /          \
                  /            \  
              AUTOBUSES         MOTOS
    */
    /* como en el ejemplo todo se define como un objeto y un objeto tiene clases
     en este caso el objeto sera un VEHICULOS  y el model sera la clase FACEBOOK.  */
    class vehiculo{
        //atributos como en el ejemplo son atributos que conciden en un vehiculo
        public $motor = false;
        public $marca;
        public $color;

        //metodos
        // recuerde que para poder usar este metodo debe ser llamado desde su misma clase 
        protected function estado()
        {
            if ($this -> motor)
            {
                echo "el motor esta encendido.<br>";    
            }
            else 
            {
                echo "el motor esta apagado.<br>";
            }
        }


        public function encender()
        {
            if ($this -> motor)
            {
                echo "el motor esta encendido.<br>";
            }
            else
            {
                echo "el motor ahora esta encendido.<br>";
                $this -> motor = true; 
            }
        }
    }
    /* aqui declaramos la class moto que sabemos que es 
    un vehiculo pero es un tipo tendra cosa en como con la clase vehiculo por en la heredamos
    con el comando reservado class xxxxx extends xxxxx*/
    class moto extends vehiculo
    {
        public function estadomoto()
        {   
            // hacemos llamado a un metodo protect de la clase padre para poder usarla por su propieda protecte
            $this -> estado();
            if ($this -> motor)
                {
                    echo "el motor de la moto esta encendido.<br>";    
                }
            else
                {
                    echo "el motor de la moto  esta apagado.<br>";
                }    
        }
    }
    
    /* aqui declaramos la class cuatrimoto que sabemos que es 
    un vehiculo pero es un tipo tendra cosa en como con la clase vehiculo por en la heredamos
    con el comando reservado class xxxxx extends xxxxx*/
    class cuatrimoto extends moto
    {
    }
    //$vehiculo = new vehiculo();
    //$vehiculo -> estado();
    //$vehiculo -> encender();
    //$vehiculo -> estado();
    //$moto = new moto();
    //$moto -> estadomoto();
    
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class
    
    como ven llamamos la clase cuatrimoto la cual por la declaracion herencias tiene todos los
    atributos metodos de su clases padre*/ 
    $moto = new cuatrimoto();
    /* ya una vez intanciada la class en la varieble del objeto se puede acceder a sus atributos
    teniedo en cuenta si es public private protecte*/
    $moto -> estadomoto();
    // como obserbamos tenemos tres clase la cual son vehiculo,
    // moto, cuatrimoto y cuatrimoto hera las dos clase anteriores
    // y puede accede a sus metod atributos

?>