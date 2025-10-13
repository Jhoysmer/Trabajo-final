<?php

     $server = "localhost";
     $usuario = "root";
     $clave = "";
     $db = "trabajo_final";
     $conexion = new mysqli($server, $usuario, $clave, $db);

      return $conexion;
?>