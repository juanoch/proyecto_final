<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agenda";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("Conexion fallida: ".mysqli_connect_error());
}else{
    echo "Conexion completada";
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$correo."' AND pass = '".$pass."'");
$resultado = mysqli_num_rows($sql);

if($resultado ==1){
    header("Location: dash.html");
}else{
    echo"DATOS INCORRECTOS";
}
?>