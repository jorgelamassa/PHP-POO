<?php namespace controller;
use models\estudiante as estudiante;
use models\secciones as secciones;

class estudiantescontroller 
{
    //atributos
    private $estudiante;
    private $seciones;
    //metodos
    public function __construct()
    {
        $this -> estudiante = new estudiante();
        $this -> seciones = new secciones();
    }
    public function index()
    {
        $datos = $this -> estudiante ->listar_studen();
        return $datos;
    }
    public function agregar()
    {
        if(!$_POST)
        {
            $datos = $this -> seciones -> listar_secciones();
            return $datos;
        }else
        {
            $permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
            $limite = 5000;
            if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite * 5000)
            {
                $nombre = date('is') . $_FILES['imagen']['name'];
                $ruta = "view" . DS . "template". DS . "img"  . DS . $nombre;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                $this->estudiante->set("nombre_studen", $_POST['nombre']);
                $this->estudiante->set("fecha_nacimiento_studen", $_POST['edad']);
                $this->estudiante->set("promedio_studen", $_POST['promedio']);
                $this->estudiante->set("imagen_studen", $_POST['$nombre']. "/". $nombre);
                $this->estudiante->set("id_seccion", $_POST['id_seccion']);
                $this->estudiante->add_studen();
                header("Location: " . URL . "estudiantes");
            }    
        }
    }

    public function editar($id_estudiante)
    {
        if (!$_POST)
            {
                $this -> estudiante -> set("id_estudiante",$id_estudiante); 
                $datos = $this -> estudiante -> view_studen();
                return $datos;
            }else 
            {
                $this -> estudiante -> set("id_estudiante",$id_estudiante); 
                $this -> estudiante -> set("nombre_studen", $_POST['nombre']);
                $this -> estudiante -> set("fecha_nacimiento_studen", $_POST['edad']);
                $this -> estudiante -> set("promedio_studen", $_POST['promedio']);
                $this -> estudiante -> set("id_seccion", $_POST['id_seccion']);
                $this -> estudiante -> UPDATE_studen();           
                header("Location: " . URL . "estudiantes");                    
            }
    }

    public function listar_secciones()
    {   
        $datos = $this-> seciones -> listar_secciones();
        return $datos;
    }
    
    public function ver($id_estudiante)
    {
        $this -> estudiante -> set("id_estudiante",$id_estudiante); 
        $datos = $this -> estudiante -> view_studen();
        return $datos;
    }
    public function eliminar($id_estudiante)
    {
        $this -> estudiante -> set("id_estudiante",$id_estudiante); 
        $datos = $this -> estudiante -> DELETE_studen();
        header("Location: " . URL . "estudiantes"); 
    }
}
$estudiante = new estudiantescontroller();

?>