<?php namespace models;
//PHP Orientado a Objetos - Creación de nuestros modelos
    class estudiante{
        // ATRIBUTOS
        public $id_studen;
        public $nombre_studen;
        public $fecha_studen;
        public $imagen_studen;
        public $id_seccion_studen;
        public $fecha_registro_studen;


        //METODO INICIALIZA LA CONEXION A LA BD
        public function __construct()
        {
            $this -> con = new conexion;
        }

        //METODO MUESTRAS TODO LOS ESTUDIANTES
        public function listar_studen()
        {
            $sql = " SELECT
            a.*,
            b.nombre_seccion 
        FROM
            estudiantes AS a
            INNER JOIN secciones AS b ON a.id_seccion = b.id_seccion";
            $datos = $this -> con -> consulta_retorno($sql);
            return $datos;
        }
        //METODO AGREGA UN NUEVO ESTUDIANTE
        public function add()
        {
            $sql = "INSERT INTO estudiantes (id_estudiante,nombre_studen,fecha_nacimiento_studen, promedio_studen,imagen_studen,id_seccion,fecha_registro_studen )
            VALUES
                ( null, '{$this -> nombre}', '{$this -> fecha_nacimiento_studen}', '{$this -> promedio_studen}', '{$this -> imagen_studen}', '{$this -> id_seccion}',NOW())";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ELIMINA UN ESTUDIANTE
        public function DELETE()
        {
            $sql = "DELETE FROM estudiantes WHERE id_estudiante = '{$this -> id_estudiante}'";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ACTUALIZA UN ESTUDIANTE
        public function UPDATE()
        {
            $sql = "UPDATE FROM estudiantes 
            SET nombre_studen = '{$this -> nombre_studen}',
                fecha_nacimiento_studen = '{$this -> nombre_studen},
                promedio_studen = '{$this -> promedio_studen},
                imagen_studen = '{$this -> imagen_studen},
                id_seccion = '{$this -> id_seccion},
            WHERE id_estudiante = '{$this -> id_estudiante}'";
            $this -> con -> consulta_simple()($sql);
        }
        //METODO QUE MUESTRA UN  ESTUDIANTE EN ESPECIFICO
        public function view()
        {
            $sql = " SELECT
            a.*,
            b.nombre_seccion 
        FROM
            estudiantes AS a
            INNER JOIN secciones AS b ON a.id_seccion = b.id_seccion
            WHERE id_estudiante = '{$this -> id_estudiante}'";
            $datos = $this -> con -> consulta_retorno($sql);
            return $datos;
        }
    }
?>