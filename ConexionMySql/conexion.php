<?php

//Direccion del host
$host = $_SERVER['SERVER_NAME'];
///Base de Datos mysql
$bd = "systemlf";
//User
$user = "luis";
//Contraseña
$contra = "luis1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$contra);
    if($conexion)
    {
        $var = "Conexion exitosa con la base de Datos $bd";
        echo "<script> alert('".$var."'); </script>";
    }
   
} catch (Exception $ex) {
   echo $ex->getMessage();
}



?>
