<?php namespace models;
// PHP Orientado a Objetos - Creación de nuestros modelos
    class seccion{
        // ATRIBUTOS
        private $id_seccion;
        private $nombre_seccion;
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

        //METODO MUESTRAS TODAS LAS SECCION 
        public function listar_secciones()
        {
            $sql = " SELECT *
            FROM
            secciones AS b";
            $datos = $this -> con -> consulta_retorno($sql);
            return $datos;
        }
        //METODO AGREGA UNA NUEVA  SECCION
        public function add_seccion()
        {
            $sql = "INSERT INTO secciones (id_seccion,nombre_seccion)
            VALUES
                ( null, '{$this -> nombre_seccion}')";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ELIMINA UNA SECCION
        public function DELETE_seccion()
        {
            $sql = "DELETE FROM secciones WHERE id_seccion = '{$this -> nombre_seccion}'";
            $this -> con -> consulta_simple($sql);
        }
        //METODO ACTUALIZA UNA SECCION
        public function UPDATE_seccion()
        {
            $sql = "UPDATE secciones 
            SET nombre_seccion = '{$this -> nombre_seccion}',
            WHERE id_seccion = '{$this -> id_seccion}'";
            $this -> con -> consulta_simple($sql);
        }
        // METODO QUE MUESTRA UNA SECCION  EN ESPECIFICO
        public function view_seccion()
        {
            $sql = " SELECT a.*
            FROM
            secciones AS b
            WHERE id_seccion = '{$this -> id_seccion}'";
            $datos = $this -> con -> consulta_retorno($sql);
            $row = \mysqli_fetch_assoc($datos);
            return $row;
        }
    }
?>