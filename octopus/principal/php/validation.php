<?php 
use mysqli;
session_start();
$mysqli = new mysqli('localhost','root','','octopus');

if($mysqli->connect_error){
    die('Error de conexion'.$mysqli->connect_error);
}
$user = $_POST['email'];
$pwd = $_POST['pwd'];

$resultado = $mysqli->query("SELECT * FROM `users` WHERE email='{$user}' and pass='{$pwd}'")->fetch_assoc();


if($resultado){
    $_SESSION['name'] = $resultado['name'];
    header('Location: /octopus/principal/dashboard.php');
}else{
    $_SESSION['error'] = "El usuario o contraseña son incorrectos";
    header('Location: /');
}


?>
