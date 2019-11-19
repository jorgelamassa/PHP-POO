<?php

class saludo{

    //Atributos 
    public $nombre = "pedro";
    //metodos
    public function hablar ($mensaje)
    {
        echo $mensaje."<br>";
    }

    public function ver_clases(){
        echo "<a  href='clase_2.php' alt='clase_2' title='clase_2'> clase 2 </a>"."<br>";
        echo "<a  href='clase_3.php' alt='clase_3' title='clase_3'> clase 3 </a>"."<br>";
        echo "<a  href='clase_4.php' alt='clase_4' title='clase_4'> clase 4 </a>"."<br>";
        echo "<a  href='clase_5.php' alt='clase_5' title='clase_5'> clase 5 </a>"."<br>";
        echo "<a  href='clase_6.php' alt='clase_6' title='clase_6'> clase 6 </a>"."<br>";
        echo "<a  href='clase_7.php' alt='clase_7' title='clase_7'> clase 7 </a>"."<br>";
        echo "<a  href='clase_8.php' alt='clase_8' title='clase_8'> clase 8 </a>"."<br>";
        echo "<a  href='clase_9.php' alt='clase_9' title='clase_9'> clase 9 </a>"."<br>";
    }
    
}
    $saludo = new saludo();
    // echo  $saludo -> nombre;
    $saludo ->hablar("saludos desde el curso");
    $saludo -> ver_clases();



?>