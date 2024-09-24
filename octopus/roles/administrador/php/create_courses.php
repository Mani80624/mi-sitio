<?php
include 'conecction.php';

$name_course = ucwords($_POST['name_course']);

$sql = "INSERT INTO `courses` (id_teacher,name_course,hours,description) VALUES ('{$_SESSION['user_id']}','{$name_course}','{$_POST['hours']}','{$_POST['description']}')";
if($mysqli->query($sql)===TRUE){
    echo $_POST['name_course'];
}else{
    echo "Ha ocurrido un error";
}
$mysqli->close();

?>
