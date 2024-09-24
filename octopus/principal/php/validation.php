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
    $_SESSION['rol'] = $resultado['rol'];
    $_SESSION['user_id'] = $resultado['id'];
    $_SESSION['email'] = $resultado['email'];
    if(strtolower($_SESSION['rol'])=='administrador'){
        header('Location: /octopus/roles/administrador/dashboard.php');
    }else{
        header('Location: /octopus/roles/alumno/dashboard.php');
    }
}else{
    $_SESSION['error'] = "El usuario o contraseña son incorrectos";
    header('Location: /');
}

$mysqli->close();

?>
