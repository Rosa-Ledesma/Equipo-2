<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personal</title>
    <link rel="stylesheet" href="estilo2.css">
</head>

<body>
    <div class="titu">
        <img class="imagen" src="doctores.jpeg" alt="">
        <h2 id="titulo">Hospital Materno Infantil de Irapuato</h2>
        <nav id="linkmenu">
            <a href="menu.php" id="menu">MENU</a>
            <!-- target="_blank" es para abrir otra pestaña -->
        </nav>
    </div>
    <br><br>

    <!-- Formulario que debera ocultarse o mostrarse  -->

    <div class="cont">
        <div id="modal">
            <form action="agregar.php" id="formusuarios" method="post">
                <div>
                    <h4>Personal</h4>
                </div>
                <div class="grupo">
                    <label for="RFC">RFC:</label>
                <input type="text" id="RFC" name="RFC" required><br><br>
                </div>
                <div class="grupo">
                    <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
                </div>
                <div class="grupo">
                    <label for="CURP">CURP:</label>
                <input type="text" id="CURP" name="CURP" required><br><br>
                </div>
                <div class="grupo">
                    <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena" required><br><br>
                </div>
                <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
                <input type="submit" value="Guardar" id="guardar">
                <!-- <a href="agregar.php?"></a> -->
            </form>
        </div>
        <br><br><br>
        <div id="botones">
            <div>
                <form id="formulario">
                    <div>
                        <h4>Personal</h4>
                    </div>
                </form>
            </div>

            <div id="listado">
                <nav>
                    <!-- <input type="button" value="Agregar" id="btnAgrega"> -->
                    <input value="Agregar" target="_parent" onclick="abremodal()" type="button" class="boton"/> 
                </nav>
            </div>

        </div>
        <div>
            <!-- Tabla que contendra las datos de la base -->
            <table>
                <thead>
                    <th>ID</th>
                    <th>RFC</th>
                    <th>Nombre</th>
                    <th>CURP</th>
                    <th>Contraseña</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </thead>
                <tbody id="datos">
                    <?php
                    // conexion a la base de datos retho tabla usuarios
    $conectar = mysqli_connect("localhost","root","","retho");
    $resulta = mysqli_query($conectar, "SELECT * FROM usuarios");

    ;

    //Consulta es un arreglo de la informacion de resulta
    while ( $consulta = mysqli_fetch_array($resulta)) {
        ?>
        <tr>
            <td><?php echo $consulta['id']?></td>
            <td><?php echo $consulta['RFC']?></td>
            <td><?php echo $consulta['nombre']?></td>
            <td><?php echo $consulta['CURP']?></td>
            <td><?php echo $consulta['contraseña']?></td>
            <!-- Agregamos links como botones, el click ejecuta su respectivo php -->
            <td><a id="BtnEliminar" href="eliminar.php?id=<?php echo $consulta['id']; ?>">Eliminar</a></td>
            <td><a id="BtnEditar" href="editar.php?id=<?php echo $consulta['id']; ?>">Editar</a></td>
            <!-- <td><input value="Editar" target="_parent" onclick="abremodal()" type="button" class="boton"/></td> -->
        </tr>
        <?php
    }

        ?>
            </tbody>
        </table>
    </div>
    <main>
        <div class="contenedor">
            <img src="" alt="">
        </div>
    </main>
</div>
<script language="JavaScript"> 
    let modal=document.getElementById("modal");
        function abremodal(){ 
            modal.style.display="block";
        }
        function cierramodal(){ 
            modal.style.display="none";
        } 
</script> 
<script src="funciones.js"></script>

</body>
</html>