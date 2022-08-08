<?php
    require ("conexion_BD.php");

    $stuID = $_GET['idAB'];
    $delAlumno = "DELETE FROM profesorado WHERE id_Profe = '$stuID'";
    $resultado = $conn->query($delAlumno);

    if($resultado == TRUE){
        header ("Location: ../PHP/queryProfes.php");
    }
    else{
        echo "Error".$delAlumno."<br>".$conn->error;
    }
?>
