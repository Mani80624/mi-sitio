<?php
use mysqli;
session_start();
$mysqli = new mysqli('localhost','root','','octopus');
$name = $_POST['first_name']." ".$_POST['last_name'];
$pwd = $_POST['pwd'];
$pwd_confirm = $_POST['pwd_confirm'];
$email = strtolower($_POST['email']);


if($pwd == $pwd_confirm){
    $update = $mysqli->query("UPDATE users SET name='{$name}', pass='{$pwd}', email='{$email}' WHERE id = {$_SESSION['user_id']}");
}
session_destroy();
header('Location: /');


?>
