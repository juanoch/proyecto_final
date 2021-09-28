<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agenda";
//create connection
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//check connection
if(!$conn){
    die("Conexion failed: " . mysqli_connect_error());
}else{
    echo "Conexion completada";
}

$correo = $_POST['correo'];
$pass = $_POST['pass'];

$sql = mysqli_query($conn,"SELECT * FROM usuario WHERE correo ='".$correo."' AND pass = '".$pass."'");
$resultado = mysqli_num_rows($sql);

if($resultado ==1){
    $sql=mysqli_query($conn,"SELECT id FROM usuario WHERE correo ='".$correo."' AND pass = '".$pass."'");
    $fila =mysqli_fetch_array($sql);

    header("Location: /nn/pagina/index.php?fg=$fila[id]");
}else{
    //echo"DATOS INCORRECTOS";
    header("Location: dash.html");
}
?>