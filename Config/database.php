<?php 


   class Conectar{
       public static function conexion(){
           $conexion= new mysqli('localhost','root','','mvc_project');
           return $conexion;
       }




   }

     