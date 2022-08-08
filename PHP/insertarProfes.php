<?php
    require ("conexion_BD.php");

    session_start();

    $name1Profe = $_POST['txt_name1P'];
    $name2Profe = $_POST['txt_name2P'];
    $sur1Profe = $_POST['txt_sur1P'];
    $sur2Profe = $_POST['txt_sur2P'];
    $fono = $_POST['txt_telP'];
    $mailProfe = $_POST['txt_mailP'];
    $passProfe = $_POST['txt_passP'];

    if (empty($_POST['txt_name1P']) && empty($_POST['txt_sur1P']) && empty($_POST['txt_passP'])){
        echo "Hay campos MUY IMPORTANTES sin llenar";
    }
    else{
        $insertarP = mysqli_query($conn, "INSERT INTO profes 
        (prnom_Profe, segnom_Profe, prape_Profe, segape_Profe, tel_Profe, mail_Profe, pass_Profe) 
        VALUES ('$name1Profe','$name2Profe','$sur1Profe', '$sur2Profe', '$fono', '$mailProfe', '$passProfe');");
    }

    if(!$insertarP){
        header("Location: ../HTML/error.html");
        echo "<script> console.log('algo no jala') </script>";
    }
    else{
        header("Location: ../HTML/Index.html");
    }
    exit();
?>