<?php   
    // PHP Orientado a Objetos - Constructores & Destructores
    /* en la programacion orientada a objetos todo se define como un objeto,
    "la clase sera como el molde del objeto" que pose atributos y metodos
    ========================================================================================================
    ejemplo:
    realizar un app tipo loteria donde indicaremos un numero aleatorio y la cantida de intentos
    esta debo mostrar los intentos y al final debe mostrar un msj si gano o no el corcunsante 
    */
    // como en el ejemplo todo se define como un objeto y un objeto tiene clases
    // en este caso el objeto sera un curso y el model sera la clase alumnos.   
    class loteria
    {
    //atributos como nos dice ele ejemplo nos pide que indiquemos un numero y la cantida 
    //de intentosque realizara y resultado
    public $numero;
    public $intentos;
    public $resultados = False;
    //metodos como nos dice la POO son acciones que puede realizar un objeto 
    //podemos acceder a los metodos $this ò self::
    // metodos __construct se ejecutara al intaciar la 
    // clase al comienzo de forma automatica debe ser publico y no puede retornar nada
        public function __construct($numero,$intentos)
        {
            $this -> numero = $numero;
            $this -> intentos = $intentos;
        }
        public function sortear()
        {
            $minimo = $this -> numero/2;
            $maximo = $this -> numero*2;
            for ( $i = 0; $i < $this -> intentos ; $i++ )
            {
                $int = rand($minimo,$maximo);
                self::intentos($int);
            }
        }
        public function intentos($int)
        {
            if($int == $this -> numero)
            {
                echo "<b>".$int ."==".$this -> numero ."</b><br>";
                $this -> resultados = True;
            } else 
            {
                echo "<b>".$int. " != ". $this-> numero ."</b><br>";
            }
        }
        // metodos __destruct()  se ejecutara al intaciar la 
        // clase al finalizar de forma automatica debe ser publico y no puede retornar nada
        public function __destruct()
        {
            if( $this -> resultados)
            {
                echo "<b>felicidades ganaste en :". $this -> intentos ."intentos</b>" ;
            }
            else
            {
                echo "<b>lastima no ganaste lo has intentado  :". $this -> intentos ."</b>";
            }
        }
    }

    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class*/
    $loteria = new loteria(10,10); 
    /* ya una vez intanciada la class en la varieble del objeto se puede acceder a sus atributos
    teniedo en cuenta si es public private protecte*/
    $loteria -> sortear();
?>