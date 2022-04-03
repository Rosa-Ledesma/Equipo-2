<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM signosvitales WHERE IdPaciente='$id'");
        $consultaSignosVitales = mysqli_fetch_array($resulta);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">
<div id="modaltres"><form action="actualizaSVyS.php" id="formSignosVyS" method="post">
<section id="tres"><fieldset>
    <legend>Signos Vitales y Somatometría</legend>
    <section id="dosp1">
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaSignosVitales['IdPaciente'] ?>" readonly><br><br>
    <label for="Peso" >Peso (kg):</label>
    <input type="text" id="Peso" name="Peso" value="<?php echo $consultaSignosVitales['Peso'] ?>" required><br><br>
    <label for="Talla">Talla (cm):</label>
    <input type="text" id="Talla" name="Talla" value="<?php echo $consultaSignosVitales['Talla'] ?>" required><br><br>
    <label for="IMC">Índice de Masa Corporal:</label>
    <input type="text" id="IMC" name="IMC" value="<?php echo $consultaSignosVitales['IMC'] ?>" required><br><br>
    <label for="Temperatura">Temperatura (°C)</label>
    <input type="text" id="Temperatura" name="Temperatura" value="<?php echo $consultaSignosVitales['Temperatura'] ?>" required><br><br>
    <label for="TensionArterialS">Tensión Arterial Sistólica (mmHg)</label>
    <input type="text" id="TensionArterialS" name="TensionArterialS" value="<?php echo $consultaSignosVitales['TensionArterialS'] ?>" required><br><br>
    <label for="TensionArterialD">Tensión Arterial Diastólica (mmHg)</label>
    <input type="text" id="TensionArterialD" name="TensionArterialD" value="<?php echo $consultaSignosVitales['TensionArterialD'] ?>" required><br><br>
    <label for="FrecuenciaRespiratoria">Frecuencia Respiratoria (por min.)</label>
    <input type="text" id="FrecuenciaRespiratoria" name="FrecuenciaRespiratoria" value="<?php echo $consultaSignosVitales['FrecuenciaRespiratoria'] ?>" required><br><br>
    <label for="FrecuenciaCardiaca">Frecuencia Cardiaca (por min.):</label>
    <input type="text" name="FrecuenciaCardiaca" id="FrecuenciaCardiaca" value="<?php echo $consultaSignosVitales['FrecuenciaCardiaca'] ?>" required><br><br>
    <label for="Glucemia">Glucemia (mg/dl)</label>
    <input type="text" name="Glucemia" id="Glucemia" value="<?php echo $consultaSignosVitales['Glucemia'] ?>" required><br><br>
    </section>
    <section id="dosp2">
    <?php
    if($consultaSignosVitales['HorasDesdeComida']=="Si"){
        ?>
        <html>
        <label for="HorasDesdeComida">¿Tiene más de 8 horas que comió?</label><br>
        <input type="radio" name="opHorasComida" id="opHorasComidaSi" value="Si" checked>
        <label for="opHorasComidaSi" >Si</label>
        <input type="radio" name="opHorasComida" id="opHorasComidaNo" value="No">
        <label for="opHorasComidaNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSignosVitales['HorasDesdeComida']=="No"){
    ?>
        <html>
        <label for="HorasDesdeComida">¿Tiene más de 8 horas que comió?</label><br>
        <input type="radio" name="opHorasComida" id="opHorasComidaSi" value="Si" >
        <label for="opHorasComidaSi" >Si</label>
        <input type="radio" name="opHorasComida" id="opHorasComidaNo" value="No" checked>
        <label for="opHorasComidaNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <label for="Oximetria">Oximetría (SpO2)</label>
    <input type="text" name="Oximetria" id="Oximetria" value="<?php echo $consultaSignosVitales['Oximetria'] ?>" required><br><br>
    <label for="Hemoglobina">Hemoglobina (g/dl)</label>
    <input type="text" name="Hemoglobina" id="Hemoglobina" value="<?php echo $consultaSignosVitales['Hemoglobina'] ?>" required><br><br>
    <label for="Cintura">Cintura (cm)</label>
    <input type="text" name="Cintura" id="Cintura" value="<?php echo $consultaSignosVitales['Cintura'] ?>" required><br><br>
    <label for="Cadera">Cadera (cm)</label>
    <input type="text" name="Cadera" id="Cadera" value="<?php echo $consultaSignosVitales['Cadera'] ?>" required><br><br>
    <label for="Brazo">Circunferencia de Brazo (cm)</label>
    <input type="text" name="Brazo" id="Brazo" value="<?php echo $consultaSignosVitales['Brazo'] ?>" required><br><br>
    <label for="PerimetroCefalico">Perímetro Cefálico (cm)</label>
    <input type="text" name="PerimetroCefalico" id="PerimetroCefalico" value="<?php echo $consultaSignosVitales['PerimetroCefalico'] ?>" required><br><br>
    <?php
    if($consultaSignosVitales['Prematuro']=="Si"){
        ?>
        <html>
        <label for="Prematuro">¿El niño es prematuro?</label><br>
        <input type="radio" name="opPrematuro" id="opPrematuroSi" value="Si" checked>
        <label for="opPrematuroSi">Si</label>
        <input type="radio" name="opPrematuro" id="opPrematuroNo" value="No">
        <label for="opPrematuroNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSignosVitales['Prematuro']=="No"){
    ?>
        <html>
        <label for="Prematuro">¿El niño es prematuro?</label><br>
        <input type="radio" name="opPrematuro" id="opPrematuroSi" value="Si" >
        <label for="opPrematuroSi">Si</label>
        <input type="radio" name="opPrematuro" id="opPrematuroNo" value="No" checked>
        <label for="opPrematuroNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    
</section>
</fieldset>
<input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
<input type="submit" value="Guardar" id="actualizar" onclick="cierramodal()">
</form></div>

    <script language="JavaScript"> 
        let modal=document.getElementById("modaltres");
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