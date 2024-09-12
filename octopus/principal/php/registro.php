<?php 
use mysqli;
$mysqli = new mysqli('localhost','root','','octopus');

if($mysqli->connect_error){
    die('Error de conexion'.$mysqli->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$mysqli->query("INSERT INTO `users` (name,email,pass) VALUES ('{$name}','{$email}','{$pwd}')");
header('Location: /');
?>
