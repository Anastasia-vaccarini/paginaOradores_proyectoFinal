<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="css/lascomprasphp.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>
<body>
<header class="header alineador_vertical">


<div class="header_element--1 alineador_vertical">
    <a href="index.html">
        <img class="header_element--1--img"  src="imagenes_integrador_front/codoacodo.png" alt="logo codo a codo">
    </a>
    
    <h2>Conf Wx As</h2>
</div>
<!--comienza el boton menu-->

<!--termina el boton menu-->
<div id="contenidoMenu" class="header_element--2 alineador_vertical" >
    
    <nav class="navegador">
        <div >
            
            <div><a class="header_element--2--opcion  header_element--2--opcion-1" href="admin.html">Inicio</a></div>
            <div><a class="header_element--2--opcion  header_element--2--opcion-3" href="oradores.php">Lista De Oradores</a></div>
            <div><a class="header_element--2--opcion  header_element--2--opcion-3" href="ticketcompra.php">Compras De Tickets</a></div>
            <div>
                <a class="header_element--2--opcion  header_element--2--opcion-2" href="index.html">EXIT</a>
            </div>

        </div>
        

    </nav>
    
</div>

</header>
<!-- /header -->
<div class="cover">
    <h1>Compras Realizadas</h1>
<div class="tabledatos">
<?php
        require 'conexion.php';
        $ordenDB = "SELECT * FROM comprastickets";
        $datos = mysqli_query($conexion, $ordenDB);
        
    ?>
    <?php while($registro = mysqli_fetch_assoc($datos)){ ?>
    <table>
        <thead>
            <td>
                Código Compra

            </td>
            <td>
                Nombre  

            </td>
            <td>
                Apellido

            </td>
            <td>
                Mail    

            </td>
            <td>
                Fecha
            </td>
            <td>
                Cantidad

            </td>
            <td>
                Categoría  

            </td>
            <td>
                Total   

            </td>

        </thead>
        <tbody>
            <td>
                <?php echo $registro['idcompra']?>
            </td>
            <td>
                <?php echo $registro['nombre']?>
            </td>
            <td>
                <?php echo $registro['apellido']?>
            </td>
            <td>
                <?php echo $registro['mail']?>
            </td>
            <td>
                <?php echo $registro['datecompra']?>
            </td>
            <td>
                <?php echo $registro['cantidad']."u."?>
            </td>
            <td>
                <?php echo $registro['catego']?>
            </td>
            <td>
                <?php echo "$".$registro['total']?>
            </td>

        </tbody>
    </table>
    <?php }?>
    </div>
</div>

</body>
</html>