<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/editarorador.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){      
        $id_orador = $_POST['id_orador'];
        require 'conexion.php';
        $ordenDB = "SELECT * FROM oradores WHERE id_orador = '$id_orador'";
        $registro = mysqli_query($conexion,$ordenDB);
        $registro = mysqli_fetch_assoc($registro);
        $nombre =  $registro['nombre'];
        $apellido = $registro['apellido'];
        $mail = $registro['mail'];
        $temaR = $registro['tema'];
        $description = $registro['ladescription'];
        // id_orador
        // nombre 
        // apellido 
        // mail 
        // tema 
        
        // ladescription
    }
    ?>
     <div class="contenedorForm">
        <div class="linehead">
            <div>
                <a href="oradores.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
                </svg>
                </a>
                
            </div>
        </div>
        <form action="actualizarorador.php" method="POST">
            <div class="dobler">
                <label for="id_orador">
                    Código de orador
                </label>    

                <input name="id_orador" type="text" value="<?php echo $id_orador?>" readonly>
            </div>
            
            <label for="nombre">
                Nombre
            </label>

            <input name="nombre" type="text" value="<?php echo $nombre?>">   

            <label for="apellido">
            Apellido
            </label>

            <input name="apellido" type="text" value="<?php echo $apellido?>">    
            <label for="mail">
            Mail
            </label>

            <input name="mail" type="text" value="<?php echo $mail?>">
            <label for="temaR">
            Título de la conferencia
            </label>

            <input name="temaR" type="text" value="<?php echo $temaR?>">
            <label for="description">
                Description
            </label>

            <input id="description" name="description" type="text" value="<?php echo $description?>">

            <div class="divenviar">
                <input id="enviar" type="submit" onclick="return confirm('seguro que desea actualizar este dato')" value="Actualizar">
            </div>
            
        </form>
     </div>
    







</body>
</html>
