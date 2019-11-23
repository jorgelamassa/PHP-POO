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
    }
?>