<?php
include('conexion.php'); 

if(!empty($_GET) )
{
    echo $nombre =$_GET['nombre'];
    echo $apellido = $_GET['apellido'];
    echo $email =$_GET['email'];
    echo $pass =$_GET['password'];
}
else{
    echo "No se recibio el formulario";
}

$sql = "INSERT INTO usuario(nombre,apellido,email,pass) VALUES ('$nombre', '$apellido','$email','$pass')";


mysqli_query($conexion, $sql);

mysqli_close($conexion);
header('refresh: 5;URL=http://localhost/lab_2_ds7');
//$go_back = htmlspecialchars($_SERVER['HTTP_REFERER']);
//echo "<a href='$go_back'>Go Back</a>";
?>
