<?php

    if ($_SERVER["REQUEST_METHOD"]== "POST") {

        $nombreOrador =       $_POST["Nombre"];
        $ApellidoOrador =     $_POST["Apellido"];
        $Correo =             $_POST["Correo"];
        $TítuloCharla =       $_POST["tituloTema"];
        $DescriptionCharla =  $_POST["Description"]; 

        $ordenDB = "INSERT INTO oradores(nombre, apellido,mail, tema,ladescription) VALUES('$nombreOrador', '$ApellidoOrador','$Correo','$TítuloCharla','$DescriptionCharla')";
        require 'conexion.php';   
        mysqli_query($conexion,$ordenDB);

        header("Location: index.html");
        exit(); 
    };
?>