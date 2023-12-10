<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styleindex.css">
    <link rel="stylesheet" href="css/oradores.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oradores</title>
</head>
<body>

    <header  class="header alineador_vertical">


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
        <?php 

            require 'conexion.php'; 
            $ordenDB = "SELECT * FROM oradores";
            $datosDB = mysqli_query($conexion,$ordenDB);
            
        ?>
    <div class="cover">      
        <!--     
        id_orador bigint(20) AI PK 
        nombre varchar(100) 
        apellido varchar(100) 
        mail varchar(100) 
        fecha_alta timestamp 
        tema varchar(400) 
        ladescription varchar(300)
        -->
            <div class="tabledatos">
            <?php
                    while ($registro = mysqli_fetch_assoc($datosDB)) {
                        $id_orador = $registro['id_orador'];
                    ?>
            <table> 
                <thead>
                    <div class="divtrthead">
                        <tr id="headtable">
                            <th>Id Orador</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Mail</th>
                            <th>Registro</th>
                            <th>Opciones</th>
                        </tr>
                    </div>
                    
                    
                </thead>
                <div class="linehor"></div>
                <tbody>
                   
                    <tr>
                        <td><?php echo $registro['id_orador']; ?></td>
                        <td><?php echo $registro['nombre']; ?></td>
                        <td><?php echo $registro['apellido']; ?></td>
                        <td><?php echo $registro['mail']; ?></td>
                        <td><?php echo $registro['fecha_alta']; ?></td>
                        
                        <td>
                            <form action="editarorador.php" method="POST">
                                <input type="hidden" name="id_orador" value="<?php echo $id_orador; ?>">
                                <button onclick="return confirm('¿DESEA EDITAR ESTE DATO?')">Editar</button>
                            </form>
                            <form action="borrarorador.php<?php$id_orador?>" method="POST">
                                <input type="hidden" name="id_orador" value="<?php echo $id_orador; ?>">
                                <button type="submit" onclick="return confirm('¿Está seguro que desea eliminar este dato?')">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    <table class="subtable">
                        <tbody>
                            <tr>
                                <th class="title">Titulo conferencia:</th>
                                <td>
                                    <?php echo $registro['tema']; ?>
                                </td>
                            
                            </tr>
                            <tr>
                                <th class="title">Descripción:</th>
                                <td>
                                    <?php echo $registro['ladescription']; ?>
                                </td>
                            </tr>
                        </tbody>   
                    </table>
                    
                    
                </tbody>
            </table>    
                    <?php
                        }
                    ?>    
            </div>
            

    </div>

</body>
</html>