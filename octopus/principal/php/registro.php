<?php 
use mysqli;
session_start();
$mysqli = new mysqli('localhost','root','','octopus');

if($mysqli->connect_error){
    die('Error de conexion'.$mysqli->connect_error);
}
$name = ucwords($_POST['name']);
$email = strtolower($_POST['email']);
$pwd = $_POST['pwd'];
$rol = $_POST['roles'];

$mysqli->query("INSERT INTO `users` (name,email,pass,rol) VALUES ('{$name}','{$email}','{$pwd}','{$rol}')");
$_SESSION['create'] = "Se ha creado la cuenta";

$mysqli->close();
header('Location: /');
?>
