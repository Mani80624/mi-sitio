<?php
use mysqli;
session_start();

$mysqli = new mysqli('localhost','root','','octopus');

if($mysqli->connect_error){
    die('Error de conexion: '.$mysqli->connect_error);
};

$name_course = ucwords($_POST['name_course']);

$sql = "INSERT INTO `courses` (id_teacher,name_course,hours,description) VALUES ('{$_SESSION['user_id']}','{$name_course}','{$_POST['hours']}','{$_POST['description']}')";
if($mysqli->query($sql)===TRUE){
    echo $_POST['name_course'];
}else{
    echo "Ha ocurrido un error";
}
$mysqli->close();

?>
