<?php

class vehiculo{
    //atributos
    public $motor = false;
    public $marca;
    public $color;

    //metodos
    public function estado()
    {
        if ($this -> motor){
            echo "el motor esta encendido.<br>";    
        }
        else {
            echo "el motor esta apagado.<br>";
        }
    }


    public function encender()
    {
        if ($this -> motor){
            echo "el motor esta encendido.<br>";
        }else{
            echo "el motor ahora esta encendido.<br>";
            $this -> motor = true; 
        }
    }

}

    class moto extends vehiculo{

        public function estadomoto(){
            if ($this -> motor){
                echo "el motor de la moto esta encendido.<br>";    
            }
            else {
                echo "el motor de la moto  esta apagado.<br>";
            }    
        }

    }


    class cuatrimoto extends moto{

    }

//$vehiculo = new vehiculo();
//$vehiculo -> estado();
//$vehiculo -> encender();
//$vehiculo -> estado();

//$moto = new moto();
//$moto -> estadomoto();

$moto = new cuatrimoto();
$moto -> estado();




?>