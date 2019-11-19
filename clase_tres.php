<?php   

class loteria{
//atributos
public $numero;
public $intentos;
public $resultados = False;
//metodos
    public function __construct($numero,$intentos){
        $this -> numero = $numero;
        $this -> intentos = $intentos;
    }

    public function sortear(){
        $minimo = $this -> numero/2;
        $maximo = $this -> numero*2;
        for ( $i = 0; $i < $this -> intentos ; $i++ ){
            $int = rand($minimo,$maximo);
            self::intentos($int);
        }
    }

    public function intentos($int){
        if($int == $this -> numero){
            echo "<b>".$int ."==".$this -> numero ."</b><br>";
            $this -> resultados = True;
        } else {
            echo "<b>".$int. " != ". $this-> numero ."</b><br>";
        }
    }

    public function __destruct(){
        if( $this -> resultados){
            echo "felicidades ganaste en :". $this -> intentos ."intentos" ;

        }else{
            echo "lastima no ganaste lo has intentado  :". $this -> intentos ;

        }
    }
}


$loteria = new loteria(10,10); 
$loteria -> sortear();


















?>