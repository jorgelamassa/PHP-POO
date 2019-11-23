<?php namespace controller;
    use models\secciones as secciones;
    class seccionescontroller 
    {
        //atributos
        private $seciones;
        //metodos
        public function __construct()
        {
            $this -> seciones = new secciones();
        }
        public function index()
        {
            $datos = $this -> seciones -> listar_secciones();
            return $datos;
        }   

        public function agregar()
        {
            if($_POST)
            {
                $this->seciones->set("nombre_seccion", $_POST['nombre_seccion']);
                $this->seciones->add_seccion();
                header("Location: " . URL . "secciones");
            }
        }
    }
?>