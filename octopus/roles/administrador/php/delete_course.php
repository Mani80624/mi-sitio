<?php
    include 'conecction.php';
    $id_course = intval($_POST['id_course']);

    
    if(isset($id_course)){
        $sql = "DELETE FROM courses WHERE id_course = ?";
        $query_prepared = $mysqli->prepare($sql);
        $query_prepared->bind_param('i',$id_course);
        $query_prepared->execute();
        $query_prepared->close();

    }
    else{
        echo "error al borrar el curso";
    }
?>