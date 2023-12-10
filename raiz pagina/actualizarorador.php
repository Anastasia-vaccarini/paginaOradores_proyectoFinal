<?php
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        
        $id_orador = $_POST['id_orador'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $mail = $_POST['mail'];
        $temaR = $_POST['temaR'];
        $description = $_POST['description'];
        require 'conexion.php';
        $ordenDB = "UPDATE oradores SET nombre = '$nombre',apellido = '$apellido',mail = '$mail',tema = '$temaR',ladescription='$description' WHERE id_orador='$id_orador'";
        mysqli_query($conexion,$ordenDB);
        header("location: oradores.php");
        exit();

    };







?>