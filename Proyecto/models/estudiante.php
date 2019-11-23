<?php namespace models;
//PHP Orientado a Objetos - Creación de nuestros modelos
    class estudiante{   
        // ATRIBUTOS
        private $id_studen;
        private $nombre_studen;
        private $fecha_studen;
        private $imagen_studen;
        private $id_seccion_studen;
        private $fecha_registro_studen;
        private $con;
        //METODO INICIALIZA LA CONEXION A LA BD
        public function __construct()
        {
            $this -> con = new conexion;
        }
        //
        public function set($atributo,$contenido)
        {
            $this -> $atributo = $contenido;
        }
        //
        public function get($atributo)
        {
            return $this -> $atributo ;
        }
        /* para probar que la clase se este llamando correcratamente con su name sapce
        public function hola()
        {
            echo "hola estamos probando";
        } */
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
        public function add_studen()
        {
            $sql = "INSERT INTO estudiantes (id_estudiante,nombre_studen,fecha_nacimiento_studen, promedio_studen,imagen_studen,id_seccion,fecha_registro_studen )
            VALUES
                ( null, '{$this -> nombre_studen}', '{$this -> fecha_nacimiento_studen}', '{$this -> promedio_studen}', '{$this -> imagen_studen}', '{$this -> id_seccion}',NOW())";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ELIMINA UN ESTUDIANTE
        public function DELETE_studen()
        {
            $sql = "DELETE FROM estudiantes WHERE id_estudiante = '{$this -> id_estudiante}'";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ACTUALIZA UN ESTUDIANTE
        public function UPDATE_studen()
        {
            $sql = "UPDATE FROM estudiantes 
            SET nombre_studen = '{$this -> nombre_studen}',
                fecha_nacimiento_studen = '{$this -> nombre_studen},
                promedio_studen = '{$this -> promedio_studen},
                imagen_studen = '{$this -> imagen_studen},
                id_seccion = '{$this -> id_seccion},
            WHERE id_estudiante = '{$this -> id_estudiante}'";
            $this -> con -> consulta_simple($sql);
        }
        //METODO QUE MUESTRA UN  ESTUDIANTE EN ESPECIFICO
        public function view_studen()
        {
            $sql = " SELECT
            a.*,
            b.nombre_seccion 
            FROM
            estudiantes AS a
            INNER JOIN secciones AS b ON a.id_seccion = b.id_seccion
            WHERE id_estudiante = '{$this -> id_estudiante}'";
            //echo $sql;
            $datos = $this -> con -> consulta_retorno($sql);
            $row = \mysqli_fetch_assoc($datos);
            return $row;
        }
    }
?>