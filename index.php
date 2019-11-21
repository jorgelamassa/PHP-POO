<?php
    // PHP Orientado a Objetos - Metodos & Atributos
    /* en la programacion orineta a objtos todo se define como un objeto; 
    un objeto se define como una clase "la clase sera como el molde del objeto" que pose atributos y metodos
    ========================================================================================================
    ejemplo;
    las personas son objetos ahora los atributos de la persona son nombre,edad,sexo y 
    los metodos son las acciones que puede realizar las personas com hablar caminar comer saludar
     */
    // como en el ejemplo todo se define como un objeto y un objeto tiene de molde la clases 
    class usarios{
        //Atributos como nos dice la POO son propiedades que propiedades que posee un objeto
        public $nombre = "jorge ";
        public $apellido = "la massa";
        //metodos como nos dice la POO son acciones que puede realizar un objeto
        public function  hablar($mensaje)
        {
        echo $mensaje. $this -> nombre . $this -> apellido."<br>";
        }
        public function ver_clases()
        {
        echo "<a  href='clase_2.php' alt='clase_2' title='clase_2'> clase 2 </a>"."<br>";
        echo "<a  href='clase_3.php' alt='clase_3' title='clase_3'> clase 3 </a>"."<br>";
        echo "<a  href='clase_4.php' alt='clase_4' title='clase_4'> clase 4 </a>"."<br>";
        echo "<a  href='clase_5.php' alt='clase_5' title='clase_5'> clase 5 </a>"."<br>";
        echo "<a  href='clase_6.php' alt='clase_6' title='clase_6'> clase 6 </a>"."<br>";
        echo "<a  href='clase_7.php' alt='clase_7' title='clase_7'> clase 7 </a>"."<br>";
        echo "<a  href='clase_8.php' alt='clase_8' title='clase_8'> clase 8 </a>"."<br>";
        echo "<a  href='clase_9.php' alt='clase_9' title='clase_9'> clase 9 </a>"."<br>";
        echo "<a  href='clase_10.php' alt='clase_10' title='clase_10'> clase 10 </a>"."<br>";
        echo "<a  href='clase_11.php' alt='clase_11' title='clase_11'> clase 11 </a>"."<br>";
        echo "<a  href='proyecto/index.php' alt='Proyecto' title='Proyecto'> Proyecto </a>"."<br>";
        }
        
    }
    /*los objetos tiende a estar guardados en variable por eso cremos la variable $usarios
    para poder asi intanciar la class usuario que como nos dice las clases seran el molde
    del objeto*/
    $usarios = new usarios();
    // ya una vez intanciada la class en la varieble del objeto se puede acceder a sus atributos
    // teniedo en cuenta si es public private protecte
    echo  $usarios -> nombre . $usarios ->apellido ."<br>";
    // ya una vez intanciada la class se puede accerde a sus metodos teniedo
    // en cuenta si es public private protecte
    $usarios ->hablar("saludos desde el curso del usuario:");
    $usarios -> ver_clases();
?>