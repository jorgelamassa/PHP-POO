<?php 
namespace models; 
    /* PHP Orientado a Objetos - Namespaces
    =====================================================================================================
    namespaces: nos ayudan a colocar "sub nombres"  a nuestros archivos clases o funciones 
    ejemplo de los namespace cambiar una clase de registro a registro estudiante por que ya existia registro 
    y por ello teniamos coalision
    namespace models;  asi declaramos un namespace se debe colocar antes de codigo php o html
    */ 
//tes
    //creamos el metodo
    class personas
    {
        public static function hola()
        {
            echo "hola soy la persona del models.";
        }
    }
?> 