<?php
include 'conecction.php';
// Preparar la consulta de forma segura para evitar inyecciones de SQL
$sql = "SELECT * FROM courses WHERE id_teacher = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('i', $_SESSION['user_id']);

// Ejecutar la consulta
$stmt->execute();
$result = $stmt->get_result();

echo "
    <table class='table mb-none'>
		<thead>
			<tr>
			    <th>#</th>
			    <th>Nombre del curso</th>
			    <th>Horas del curso</th>
			    <th>Descripción del curso</th>
			    <th>editar/borrar</th>
		    </tr>
	    </thead>
        <tbody>  
";
while($row = $result->fetch_assoc()){
    echo "
    <tr>
    <td> {$row['id_course']}</td>
    <td> {$row['name_course']}</td>
    <td> {$row['hours']}</td>
    <td> {$row['description']}</td>
    <td class='actions-hover'>
        <a class='edit-course'><i class='fa fa-pencil'></i></a>
        <a  class='delete-row'><i class='fa fa-trash-o'></i></a>
    <td>
    </tr>
    ";
}
echo "</tbody>
</table>";
?>
