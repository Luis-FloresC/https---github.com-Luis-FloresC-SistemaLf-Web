<?php

$host = $_SERVER['SERVER_NAME'];
$bd = "systemlf";
$user = "luis";
$contra = "luis1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$contra);
    if($conexion)
    {
        $var = "Conectado al sistema";
        echo "<script> alert('".$var."'); </script>";
    }
   
} catch (Exception $ex) {
   echo $ex->getMessage();
}



?>
