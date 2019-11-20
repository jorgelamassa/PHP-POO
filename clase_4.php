<?php   
    // PHP Orientado a Objetos - Modificadores de acceso
    /* 
    en la programacion orientada a objetos todo se define como un objeto,
    "la clase sera como el molde del objeto" que pose atributos y metodos.
    =======================================================================
    los modificadores de acceso son propiedades que se le pueden colocar a nuestros atributos y metodos
    public  : atributos y metodos que pueden ser acesibles por quien sea y caundo sea
    private : solo puede ser llamado desde otro metodo de la clase
    protecte: el cual solo puede accedido desde la clase pero no  por objetos definidos de dichas clases
    ========================================================================================================
    ejemplo:
    imaginemos una cuneta de facebook 
    un usario tiene nombre apellido y la edad estos son son atributos que pueden ser 
    accedidos por cualquier persona estos serian atributos publicos.
    pero un usario tiene un atributo passwork el cual no puede ser accedido por todos por eso le colocamos
    la propiedad private para que solo puede ser accedio por su user
    los mismo aplica para los metodos mostar,cambiar el  nombre apellido edad puede ser accedo por todos
    pero el passwork debe no lo puede ser seria private 
    ========================================================================================================    
    */
    /* como en el ejemplo todo se define como un objeto y un objeto tiene clases
     en este caso el objeto sera un curso y el model sera la clase alumnos.  */
    class user_facebook{

    //atributos
    public $nombre;
    public $apellido;
    public $edad;
    // contraseña por ser ptivate no se puede acceder desde la instacia solo solo se puede desde la misma clase
    private $pass;
    // metodos
        //recordemos que por ser construc este metodos pide los datos
        public function __construct ($nombre,$edad,$pass)
        {
            $this -> nombre = $nombre;
            $this -> edad = $edad;
            $this -> pass = $pass;
        }
        public function verinformacion()
        {
            echo "<b> el nombre: ". $this -> nombre . "<br></b>";
            echo "<b> su edad es: ". $this -> edad ."<br></b>";
            $this -> cambiarpass ("544646");
            echo "<b> pass: ". $this -> pass ."</b>";
        }
        // para que acceder a este metodo no lo puedo hacer desde afuera si no desde 
        // un metodo de la misma clase "linea 44"
        private function cambiarpass($pass)
        {
            $this -> pass = $pass;
        }
    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class*/

    $facebook = new user_facebook("USER FACE",33,"56218");

    echo $facebook -> nombre;
    echo $facebook -> edad;
    //$facebook ->cambiarpass("12566"); 
    //Call to private method facebook::cambiarpass() from context '
    //echo $facebook -> pass; Call to private method facebook::cambiarpass() from context '

    /* ya una vez intanciada la class en la varieble del objeto se puede acceder a sus atributos
    teniedo en cuenta si es public private protecte*/
    $facebook ->verinformacion();


?>