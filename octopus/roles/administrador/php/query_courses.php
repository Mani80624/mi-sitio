<?php
include 'conecction.php';

// Preparar la consulta de forma segura para evitar inyecciones de SQL
$sql = "SELECT * FROM courses WHERE id_teacher = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_SESSION['user_id']);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

// Construir el array para convertirlo a JSON
$array_json = array();
while ($row = $result->fetch_assoc()) {
    $array_json[] = $row;
}

// Devolver los resultados en formato JSON
echo json_encode($array_json);

// Liberar recursos
$stmt->close();
$mysqli->close();


//file_put_contents('/octopus/roles/administrador/json/query_courses.json',json_encode($array_json));

//header('Location: /octopus/roles/administrador/curses.php');
?>
