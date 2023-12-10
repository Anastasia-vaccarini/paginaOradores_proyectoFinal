<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre   = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $mail     = $_POST['Correo'];
        $cantidad = $_POST['cantidad'];
        $catego   = $_POST['Categoria'];
        $total    = $_POST['total'];
        require 'conexion.php';
        $ordenDB = "INSERT INTO comprastickets(nombre, apellido, mail ,cantidad, catego,total) VALUES('$nombre', '$apellido', '$mail','$cantidad', '$catego', '$total')";
        mysqli_query($conexion,$ordenDB);
        header('location: ComprarTickets.html');
        exit();
    };

?>