<?php
    require ("conexion_BD.php");
    session_start();

    $usuario = $_POST['username'];
    $password = $_POST['password'];

    $validar1 = mysqli_query($conn, "SELECT * FROM alumnado WHERE mail_Alumno = '$usuario' AND pass_Alumno = '$password'");
    $validar2 = mysqli_query($conn, "SELECT * FROM administradores WHERE mail_Emp = '$usuario' AND pass_Emp = '$password'");
    $validar3 = mysqli_query($conn, "SELECT * FROM profesorado WHERE mail_Profe = '$usuario' AND pass_Profe = '$password'");
    
    if(mysqli_num_rows($validar1) > 0 || mysqli_num_rows($validar2) > 0 || mysqli_num_rows($validar3) > 0){
        header("Location: ../HTML/index.html");
    }
    else {
        echo "\nEl usuario no existe en la base de datos";
    }
?>