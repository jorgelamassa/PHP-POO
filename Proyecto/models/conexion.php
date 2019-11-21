<?php namespace models;
/*PHP Orientado a Objetos - Creación de nuestros modelos
========================================================================================================
Lenguaje de definición de datos (DDL)
Las sentencias DDL se utilizan para crear y modificar la estructura 
de las tablas así como otros objetos de la base de datos.

CREATE - para crear objetos en la base de datos.
ALTER - modifica la estructura de la base de datos.
DROP - borra objetos de la base de datos.
TRUNCATE - elimina todos los registros de la tabla, incluyendo todos los espacios asignados a los registros.
========================================================================================================
Lenguaje de manipulación de datos (DML)
Las sentencias de lenguaje de manipulación de datos (DML)
 son utilizadas para gestionar datos dentro de los schemas. Algunos ejemplos:

SELECT - para obtener datos de una base de datos.
INSERT - para insertar datos a una tabla.
UPDATE - para modificar datos existentes dentro de una tabla.
DELETE - elimina todos los registros de la tabla; no borra los espacios asignados a los registros.
========================================================================================================
En la programacion orientada a objetos todo se define como un objeto,
un objeto se define como una clase "la clase sera como el molde del objeto" 
que pose atributos y metodos
========================================================================================================*/
// la clase conexion nos permitira realizar la conexion a la bd
    class conexion
    {
        //atributos DATOS PARA LA CONEXION A LA BD
        private $datos = array
        (
            "host"=>"localhost",
            "user"=>"root",
            "pass"=>"proyecto_php_poo",
            "db"=>""
        );
        //atributos para la conexion
        private $con;

        // metodo que relaiza  la conexion a la bd
        public function __construct()
        {
            $this -> con = new \mysqli
            (
                $this -> datos["host"],
                $this -> datos["user"],
                $this -> datos["pass"],
                $this -> datos["db"]
            );
        }
        // metodo que relaiza  DML INSERT ,UPDATE,DELETE 
        public function consulta_simple($sql)
        {
            $this -> con -> query($sql);
        }
         // metodo que relaiza  DML SELECT "CREAMO ESTE METODO YA Q A PESAR QUE ES PARA DML REGRESARA UN ALGO POR ESO LO SEPARAMOS"
        public function consulta_retorno($sql)
        {
            $datos = $this -> con -> query($sql);
            return $datos;
        }
            
    }

?>