<?php
    /* PHP Orientado a Objetos - Interfaces 
    en la programacion orientada a objetos todo se define como un objeto,
    "la clase sera como el molde del objeto" que pose atributos y metodos.
    =======================================================================
    interface: permiten crear codigo con el cul especificamos que metodos 
    deben ser imoplementado para una clase son clase standar pero sin metodos 
    que tengan su contenido definido todos los metodos de una interface deben ser publicos
    */

    // delclaramos interface
    interface auto {
        public function encender();
        public function apagar();
    }
    // delclaramos interface   y le heredamos una interface 
    interface gasolina extends auto{
        public function vaciartanque();
        public function llenartanque($cant);
    }
    // delcaramos la class y le implementamos la interface 
    class deportivo implements gasolina{
        //atributos
        private $estado = false ;
        private $tanque = 0;
        //metodos metodos de la clase
        public function ver(){
            if ($this -> estado){
                echo "esta encendido el vehiculo con " .$this -> tanque ." the litros <br>";
            }else{
                echo "esta apagado el vehiculo <b>";
            }
        }
        /* metodos  de la interface se deben implementar en la clase todos losmetodos  de la interface
    y si tiene herencias el interface se debe implemnetar los metodos propios y heredados de no 
        hacerlo tenfriamos un error fatal*/
        public function encender(){
            if ($this -> estado)
            {
                echo "<b> no puedes encender el vehiculo dos veces y tiene de gasolina <br></b>";
            }
            else
            {
                if ($this -> tanque <= 0)
                {
                    echo "<b>usted no puede encender el vehiculo no tiene gaolina <br></b>";
                }
                else
                {
                    echo "<b>vehiculo se encedera en este momento <br></b>";
                    $this -> estado = true;  
                }
            }
        }
        public function apagar()
        {
            if ($this -> estado)
            {
                echo "<b>vehiculo se apagara en este momento <br></b>";
                $this -> estado = false;
            }
            else
            {
                echo "<b>el auto esta apagado <br></b>";
                //$this -> estado = true;
            }
        }
        public function vaciartanque()
        {
            $this -> tanque = 0;
        }
        public function llenartanque($cant)
        {
            $this -> tanque = $cant ;
        }

        public function usar($km)
        {
            if ($this-> estado)
            {
                $reducir = $km / 3;
                $this -> tanque = $this -> tanque - $reducir;
                if($this -> tanque<=0){
                    echo "se acabo la gasolina <br>";
                    $this -> estado = false;
                }
            }
            else
            {
                echo "el vehiculo esta apagado y no se puede usar <br>";
            }
        }
    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class*/ 
    $obj = new deportivo();
    $obj -> llenartanque(100);
    $obj -> encender();
    $obj -> usar(300);    
    $obj -> ver();
?>