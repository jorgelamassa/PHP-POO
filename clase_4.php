<?php   

class facebook{

//atributos
public $nombre;
public $edad;
private $pass; //contraseña
// metodos
    public function __construct ($nombre,$edad,$pass){
        $this -> nombre = $nombre;
        $this -> edad = $edad;
        $this -> pass = $pass;

    }
    public function verinformacion(){
        echo "el nombre: ". $this -> nombre . "<br>";
        echo "su edad es:". $this -> edad ."<br>";
        $this -> cambiarpass ("544646");
        echo "pass". $this -> pass ;
    }

    private function cambiarpass($pass){
        $this -> pass = $pass;

    }

}

$facebook = new facebook("poo curso",4,"56218");
//echo $facebook -> nombre;
//echo $facebook -> edad;
//$facebook ->cambiarpass("12566"); Call to private method facebook::cambiarpass() from context '
//echo $facebook -> pass; Call to private method facebook::cambiarpass() from context '
$facebook ->verinformacion();


?>