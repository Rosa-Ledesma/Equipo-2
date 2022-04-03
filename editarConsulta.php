<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM consulta WHERE IdPaciente='$id'");
        $consultaConsulta = mysqli_fetch_array($resulta);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">

<div id="modalcuatro"><form action="actualizaConsulta.php" id="formConsulta" method="post">
<section id="cuatro"><fieldset> 
    <legend>Consulta</legend>
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaConsulta['IdPaciente'] ?>" readonly><br><br>
    <label for="FechaConsulta">Fecha Consulta</label>
    <input type="date" id="FechaConsulta" name="FechaConsulta" value="<?php echo $consultaConsulta['FechaConsulta'] ?>" required><br><br>
    <?php
    if($consultaConsulta['RelacionTemporal']=="Primera Vez"){
        ?>
        <html>
        <label for="RelacionTemporalMot">Relación temporal por motivo:</label><br>
        <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMot1ra" value="Primera Vez" checked>
        <label for="opRelacionTemporalMot1ra">Primera Vez</label>
        <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMotSub" value="Subsecuente">
        <label for="opRelacionTemporalMotSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaConsulta['RelacionTemporal']=="Subsecuente"){
    ?>
        <html>
        <label for="RelacionTemporalMot">Relación temporal por motivo:</label><br>
        <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMot1ra" value="Primera Vez">
        <label for="opRelacionTemporalMot1ra">Primera Vez</label>
        <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMotSub" value="Subsecuente" checked>
        <label for="opRelacionTemporalMotSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <label for="Problema">Problema:</label>
    <input type="text" id="Problema" name="Problema" value="<?php echo $consultaConsulta['Problema'] ?>" required><br><br>
    <label for="Sintomas">Síntomas:</label>
    <input type="text" id="Sintomas" name="Sintomas" value="<?php echo $consultaConsulta['Sintomas'] ?>" required><br><br>
    <label for="Objetivo">Objetivo:</label>
    <input type="text" id="Objetivo" name="Objetivo" value="<?php echo $consultaConsulta['Objetivo'] ?>" required><br><br>
    <label for="Analisis">Análisis:</label>
    <input type="text" id="Analisis" name="Analisis" value="<?php echo $consultaConsulta['Analisis'] ?>" required><br><br>
    <label for="ResultadosAux">Resultados de Auxiliares de Diagnóstico:</label>
    <input type="text" id="ResultadosAux" name="ResultadosAux" value="<?php echo $consultaConsulta['ResultadosAux'] ?>" required><br><br>
</fieldset><br></section>
    <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
    <input type="submit" value="Guardar" id="actualizar" onclick="cierramodal()">
</form></div>


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