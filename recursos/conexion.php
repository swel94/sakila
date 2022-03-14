
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "sakila";


// Conexion con 000Webhost 

if ($_SERVER['HTTP_HOST'] == 'swel94.000webhostapp.com'){
    $username = "id18475176_root";
    $password = "sDYd-9SHHd<\[|Pg";
    $database = "id18475176_sakila";
}

$conexion = mysqli_connect($hostname, $username, $password, $database) or die ("No se pudo conectar a la base de datos " . mysqli_connect_error());

?>