<?php
    require ("conexion_BD.php");

    $stuID = $_GET['idAB'];
    $delAlumno = "DELETE FROM administradores WHERE id_Emp = '$stuID'";
    $resultado = $conn->query($delAlumno);

    if($resultado == TRUE){
        header ("Location: ../PHP/queryAdmins.php");
    }
    else{
        echo "Error".$delAlumno."<br>".$conn->error;
    }
?>
