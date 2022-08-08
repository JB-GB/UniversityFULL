<?php
    $localhost = "db4free.net";
    $usuario = "jbwebapps";
    $password = "123456jb";
    $dbName = "oxforduniversity";
    //$conexion = mysqli_connect($localhost, $usuario, $password, $dbName);

    $conn = new mysqli($localhost, $usuario, $password, $dbName); 
    if (!$conn){
        die("Conection failed: " . mysqli_connect_error());
    }
    echo'<script type="text/javascript">
        alert("FUNCIONA");
        </script>';
?>