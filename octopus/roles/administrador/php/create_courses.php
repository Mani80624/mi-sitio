<?php
include 'conecction.php';

$user_id = $_SESSION['user_id'];
$name_course = ucwords($_POST['name_course']);
$hours = $_POST['hours'];
$description = $_POST['description'];

if($user_id != '' && $name_course != '' && $hours != '' && $description != '') {
    // Consulta SQL corregida sin las comillas simples
    $sql = "INSERT INTO courses (id_teacher, name_course, hours, description) VALUES (?, ?, ?, ?)";
    
    // Preparar la consulta
    $prepared_consult = $mysqli->prepare($sql);
    
    // Enlazar parámetros con los tipos correctos: 'i' para integer, 's' para string
    $prepared_consult->bind_param('isis', $user_id, $name_course, $hours, $description);
    
    // Ejecutar la consulta
    $prepared_consult->execute();
    
    // Cerrar la consulta preparada
    $prepared_consult->close();
}



?>
