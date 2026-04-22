<?php
//Configuración de párametros para XAMPPP/MariaDB
$host = "localhost";
$user = "root";
$pass = "";
$bd = "pasteleria";

//Crear la conexión
$con = new mysqli($host, $user, $pass, $bd);

//Verificar si la conexión fue exitosa

if($con->connect_error){
    //echo "Error de conexión";
} else {
    //echo "Conexión éxitosa";
}

/*
if($con->connect_error){
    die("Error de conexión: " . $con->connect_error);
}
*/
?>