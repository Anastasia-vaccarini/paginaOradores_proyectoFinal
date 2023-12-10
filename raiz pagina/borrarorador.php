<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){      
        $id_orador = $_POST['id_orador'];
        require 'conexion.php';
        $ordenDB ="SELECT id_orador FROM oradores WHERE id_orador = '$id_orador'";
        $exists_id = mysqli_query($conexion,$ordenDB);
        if ($exists_id){
            $ordenDB ="DELETE FROM oradores WHERE id_orador = '$id_orador'";
            mysqli_query($conexion,$ordenDB);
            header("location: ../oradores.php");
            exit();
        };
        
        
        
    };
    

?>