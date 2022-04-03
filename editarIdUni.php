<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM identificaciondelaunidad WHERE IdPaciente='$id'");
        $consultaIdUnidad = mysqli_fetch_array($resulta);
        // echo $consulta['RFC'];
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">
<div id="modaluno">
    <form action="actualizaIdUnidad.php" id="formIdUnidad" method="post">

    <section id="uno"><fieldset>  
    <legend>Identificacion de la Unidad</legend>
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaIdUnidad['IdPaciente'] ?>" readonly><br><br>
    <label for="NombreUnidad">Nombre de la unidad:</label>
    <input type="text" id="NombreUnidad" name="NombreUnidad" value="<?php echo $consultaIdUnidad['NombreUnidad'] ?>" required><br><br>
    <label for="PrestadorServicio">Prestador del Servicio:</label>
    <input type="text" id="PrestadorServicio" name="PrestadorServicio" value="<?php echo $consultaIdUnidad['PrestadorServicio'] ?>" required><br><br>
    <label for="Servicio">Servicio:</label>
    <input type="text" id="Servicio" name="Servicio" value="<?php echo $consultaIdUnidad['Servicio'] ?>" required><br><br>
    </fieldset></section>
    <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
    <input type="submit" value="Guardar" id="actualizar" onclick="cierramodal()">
    </form>
</div>

    <script language="JavaScript"> 
        let modal=document.getElementById("modaluno");
        modal.style.display="block";
        function abremodal(){ 
            modal.style.display="block";
        } 
        function cierramodal(){ 
            // modal.style.display="none";
            window.location = 'paciente.php?id=<?php echo $id ?>';
        } 
    </script> 
    <?php
        include_once("paciente.php");
    ?> 
    
</body>
</html>