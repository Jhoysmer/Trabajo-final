<?php
function(){
     $server = "localhost";
     $usuario = "root";
     $clave = "";
     $db = "trabajo_final";
     $conexion = mysqli_connect($server, $usuario, $clave, $db);
         mysqli_select_db($conexion,$db);
      return $conexion;
};
?>