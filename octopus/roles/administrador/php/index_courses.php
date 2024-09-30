<?php
    include 'conecction.php';

    // Preparar la consulta de forma segura para evitar inyecciones de SQL
    $sql = "SELECT * FROM courses WHERE id_teacher = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $_SESSION['user_id']);

    // Ejecutar la consulta
    $stmt->execute();
    $result = $stmt->get_result();
    $array_id = array();
    while($row=$result->fetch_assoc()){
        $array_id []= $row['id_course'];
    }
    echo json_encode($array_id);
?>