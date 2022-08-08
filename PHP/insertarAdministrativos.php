<?php
    require ("conexion_BD.php");

    session_start();

    $name1Admin = $_POST['txt_name1'];
    $name2Admin = $_POST['txt_name2'];
    $sur1Admin = $_POST['txt_sur1'];
    $sur2Admin = $_POST['txt_sur2'];
    $fono = $_POST['txt_tel'];
    $mailAdmin = $_POST['txt_mail'];
    $passAdmin = $_POST['txt_pass'];

    if (empty($_POST['txt_name1']) && empty($_POST['txt_sur1']) && empty($_POST['txt_pass'])){
        echo "Hay campos MUY IMPORTANTES sin llenar";
    }
    else{
        $insertar = mysqli_query($conn, "INSERT INTO administradores 
        (prnom_Emp, segnom_Emp, prape_Emp, segape_Emp, tel_Emp, mail_Emp, pass_Emp) 
        VALUES ('$name1Admin','$name2Admin','$sur1Admin', '$sur2Admin', '$fono', '$mailAdmin', '$passAdmin');");
    }

    if(!$insertar){
        header("Location: ../HTML/admins.html");
        echo "<p> Algo salio mal</p>";
    }
    else{
        header("Location: ../HTML/Index.html");
    }
    exit();
?>