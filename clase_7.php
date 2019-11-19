<?php
interface auto {
    public function encender();
    public function apagar();
}

interface gasolina extends auto{
    public function vaciartanque();
    public function llenartanque($cant);
}

class deportivo implements gasolina{
    //atributos
    private $estado = false ;
    private $tanque = 0;
    //metdos
    public function ver(){
        if ($this -> estado){
            echo "esta encendido el vehiculo con " .$this -> tanque ." the litros <br>";
        }else{
            echo "esta apagado el vehiculo <br>";
        }
    }
    //metdos  de la interface
    public function encender(){
        if ($this -> estado){
            echo "no puedes encender el vehiculo dos veces y tiene de gasolina <br>";
        }else{
            if ($this -> tanque <= 0){
                echo "usted no puede encender el vehiculo no tiene gaolina <br>";
            }
            else{
                echo "vehiculo se encedera en este momento <br>";
                $this -> estado = true;  
            }
        }
    }
    public function apagar(){
        if ($this -> estado){
            echo "vehiculo se apagara en este momento <br>";
            $this -> estado = false;
        }else{
            echo "el auto esta apagado <br>";
            //$this -> estado = true;
        }
    }
    public function vaciartanque(){
        $this -> tanque = 0;
    }
    public function llenartanque($cant){

        $this -> tanque = $cant ;

    }

    public function usar($km){
        if ($this-> estado){
            $reducir = $km / 3;
            $this -> tanque = $this -> tanque - $reducir;
            if($this -> tanque<=0){
                echo "se acabo la gasolina <br>";
                $this -> estado = false;

            }
        }else{
            echo "el vehiculo esta apagado y no se puede usar <br>";
        }
    }
}

$obj = new deportivo();
$obj -> llenartanque(100);
$obj -> encender();
$obj -> usar(300);    
$obj -> ver();
?>