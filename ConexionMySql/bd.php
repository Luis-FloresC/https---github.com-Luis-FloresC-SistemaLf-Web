<?php

$servername = "192.168.0.114";
$database = "systemlf";
$username = "luis";
$password = "luis1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

$sql = "CALL `ModificarProductos`('6', 'Mac 32', '1', '23000', '12');";
if (mysqli_query($conn, $sql)) {
    $var "New record created successfully";
} else {
    $var "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);	
    echo "<script> alert('".$var."'); </script>";


?>

