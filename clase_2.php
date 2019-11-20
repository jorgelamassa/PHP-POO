<?php
    // PHP Orientado a Objetos - Metodos & Atributos
    /* en la programacion orientada a objetos todo se define como un objeto,
    un objeto se define como una clase "la clase sera como el molde del objeto" que pose atributos y metodos
    ejemplo
    los alumnos que pertenecen a un curso tienen atributos como nombre apellido y metodos como mostrar 
    sua atreibutos nombre y apellido */
    // como en el ejemplo todo se define como un objeto y un objeto tiene clases
    // en este caso el objeto sera un curso y el model sera la clase alumnos. 
    class alumnos
    {
        //Atributos como nos dice la POO son propiedades atributos que posee un objeto
        //podemos acceder a los atributos de una clase con la palabra reservada en php $this -> xxxx
        public $nombre = array();
        public $apellido = array();
        //metodos como nos dice la POO son acciones que puede realizar un objeto 
        //podemos acceder a los metodos $this ò self::
        public function guardar($nombre,$apellido)
            {
            $this -> nombre[]   = $nombre;
            $this -> apellido[] = $apellido;
            }

        public function mostrar()
        {
        // ciclo para a si poder recorer un array
        for($i = 0; $i < count( $this -> nombre ); $i++)
        {
        // aqui vemos como podemos acceder a los metodos con las palabra reservadas $this ò self::
        self::formato( $this -> nombre[$i], $this -> apellido[$i]);
        alumnos::formato( $this -> nombre[$i], $this -> apellido[$i]);
        $this->formato( $this -> nombre[$i], $this -> apellido[$i]);
        }
        }

        public function formato($nombre,$apellido)
        {
            echo "<b>alumno: " .$nombre. " | apellido: " .$apellido. ".<br></b>";
        }
    }
    /*recuerden que las class funcionan con los moldes para un objeto. 
    los objetos tiende a estar guardodo en variable y la palabra reservada php new 
    y la cual le vamos asignar la class */
    $cursos = new alumnos();
    /* ya una vez intanciada la class en la varieble del objeto se puede acceder a sus atributos
    teniedo en cuenta si es public private protecte*/
    $cursos -> guardar("Jorge ","La Massa");
    $cursos -> guardar("Roger ","Contreras");
    $cursos -> guardar("Fernando ","Peres");
    $cursos -> mostrar();
?>