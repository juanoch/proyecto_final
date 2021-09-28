<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "agenda";
//create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
    $fg = $_GET['fg'];
    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $sql = "INSERT INTO contacto(fk_usuario, nombre, marca, precio) VALUES ('".$fg."','".$fnombre."','".$marca."','".$precio."')";
    if(mysqli_query($conn,$sql)){
        echo "SE INSERTO CORRECTAMENTE";
        header("Location: /nn/pagina/index.php?fg=$fg");
    }else{
        echo "ERROR EN LA INSERCION: ".mysqli_error($conn);
    }
}


?>