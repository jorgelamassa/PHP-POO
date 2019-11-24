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


        public function editar($id_seccion)
        {
            if ($_POST)
                {   
                    $this->seciones->set("id_seccion",$id_seccion);
                    $this->seciones->set("nombre_seccion", $_POST['nombre_seccion']);
                    $this->seciones->UPDATE_seccion();
                    header("Location: " . URL . "secciones");
                }else 
                {
                    $this -> seciones -> set("id_seccion",$id_seccion); 
                    $datos = $this -> seciones -> view_seccion();
                    return $datos;
                }
        }

        public function eliminar($id_seccion)
        {
            $this->seciones->set("id_seccion",$id_seccion); 
            $this->seciones->DELETE_seccion();
            header("Location: " . URL . "secciones"); 
        }
    }
?>