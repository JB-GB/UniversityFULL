<?php
    require ("conexion_BD.php");

    $stuID = $_GET['idAB'];
    $delAlumno = "DELETE FROM alumnado WHERE id_Alumno = '$stuID'";
    $resultado = $conn->query($delAlumno);

    if($resultado == TRUE){
        header ("Location: ../PHP/queryAlumnos.php");
    }
    else{
        echo "Error".$delAlumno."<br>".$conn->error;
    }
?>
