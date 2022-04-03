<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $resulta = mysqli_query($conectar, "SELECT * FROM usuarios WHERE id='$id'");
        $consulta = mysqli_fetch_array($resulta);
        // echo $consulta['RFC'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estilos2.css">
</head>
<body>
    <div id="modal">
        <form id="formusuarios2" action="actualiza.php" method="post">
            <div>
                <h4>Personal</h4>
            </div>
            <div class="grupo">
                <label for="id">Id:</label>
                <input type="text" id="id" name="id" value="<?php echo $consulta['id'] ?>" readonly><br><br>
            </div>
            <div class="grupo">
                <label for="RFC">RFC:</label>
                <input type="text" id="RFC" name="RFC" value="<?php echo $consulta['RFC'] ?>" required><br><br>
            </div>
            <div class="grupo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $consulta['nombre'] ?>" required><br><br>
            </div>
            <div class="grupo">
                <label for="CURP">CURP:</label>
                <input type="text" id="CURP" name="CURP" value="<?php echo $consulta['CURP'] ?>" required><br><br>
            </div>
            <div class="grupo">
                <label for="contrasena">Contraseña:</label>
                <input type="text" id="contrasena" name="contrasena" value="<?php echo $consulta['contraseña'] ?>" required><br><br>
            </div>

            <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
            <!-- <input type="submit" value="Guardar" id="guardar"> -->
            <input type="submit" value="Guardar" id="actualizar" onclick="cierramodal()">
            <!-- <a href="agregar.php?"></a> -->

        </form>
    </div>
    <script language="JavaScript"> 
        let modal=document.getElementById("modal");
        modal.style.display="block";
        function abremodal(){ 
            modal.style.display="block";
        } 
        function cierramodal(){ 
            modal.style.display="none";
        } 
    </script> 
    <?php
        include_once("usuarios.php");
    ?> 
    
</body>
</html>