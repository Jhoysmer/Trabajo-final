<?php

     $server = "localhost";
     $usuario = "root";
     $clave = "";
     $db = "trabajo_final";
     $conexion = new mysqli($server, $usuario, $clave, $db);

     if (conexion->connect_errno){
        die("conexion fallida" . $conexion->connect_errno);
         }
         else {
            echo "conectado";
         }
?>