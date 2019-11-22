<?php namespace config;
// 
    class request{
    // atributos    
    private $controlador;
    private $metodo;
    private $argumento;
        // metodos __construct acordemos que sto se ejecuta de manera automatica al comienzo de la clase
        public function __construct()
        {
            // validamos si existe una varieble llamada url que la declaramos en nuetromarchivo .htcces
            if(isset($_GET['url']))
            {   
                /*filter_input — Toma una variable externa concreta por su nombre
                y opcionalmente la filtra
                ==========================================================================================
                Parámetros una variable
                type
                Una de las siguientes: INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER o INPUT_ENV.
                ==========================================================================================
                FILTER_SANITIZE_URL Elimina todos los caracteres excepto letras, 
                dígitos y $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
                */
                $ruta = filter_input(INPUT_GET,'url',FILTER_SANITIZE_URL);
                /*explode — Divide un string en varios string
                Devuelve un array de string, siendo cada uno un substring del parámetro 
                string formado por la división realizada por los delimitadores indicados
                en el parámetro delimiter.
                */
                $ruta = explode("/",$ruta);
                /* array_filter — Filtra elementos de un array usando una función de devolución de llamada*/
                $ruta = array_filter($ruta);
                if($ruta[0] == "index.php")
                {
                    $this -> controlador = "estudiante";
                }
                else
                {
                // para imprimir el array que creamos  print_r($ruta);
                print_r($ruta);
                $this -> controlador = \strtolower(array_shift($ruta));
                }
                
                $this -> metodo = \strtolower(array_shift($ruta));
                if (!$this -> metodo)
                {
                    $this -> metodo = "index";
                }
                $this -> argumento = $ruta;
            }
        }
    /*==============================================================================*/
        public function get_controller()
        {
            //retornamos el controlador con el metodo de esta clase request
            return $this -> controlador;
        }
        public function get_metodo()
        {
            //retornamos el metodo con el metodo de esta clase request
            return $this -> metodo;
        }
        public function get_argumento()
        {
            //retornamos el argumento con el metodo de esta clase request
            return $this -> argumento;
        }
    }
?>