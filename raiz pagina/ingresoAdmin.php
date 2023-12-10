<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = $_POST['email'];
        $pass = $_POST['password'];
        require 'conexion.php';
        $ordenDB = "SELECT * FROM administradorDB";
        $datosGET = mysqli_query($conexion,$ordenDB);
        $datosGET = mysqli_fetch_assoc($datosGET);
        echo $datosGET;
        $usuariocorrect = false;
        $passcorrect = false ; 

        foreach ($datosGET as $key => $datoregistro) {
            if ($key == 'usuario' && $datoregistro == $usuario){
                $usuariocorrect = true;
            }else if($key == 'pass' && $datoregistro == $pass){
                $passcorrect = true;
            };
        };
        if($usuariocorrect == true && $passcorrect  == true){
            header("Location: admin.html");
            exit();
            
        }else{
            header("Location: ingreso.html");
            
            exit();
        };
    };
  
?>