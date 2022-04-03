<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM saludreproductiva WHERE IdPaciente='$id'");
        $consultaSaludR = mysqli_fetch_array($resulta);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">

<div id="modalcinco"><form action="actualizaSaludR.php" id="formSaludR" method="post">
<section id="cinco"><fieldset> 
    <legend>Salud Reproductiva</legend>
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaSaludR['IdPaciente'] ?>" readonly><br><br>
    <label for="RelacionTemporal">RelacionTemporal:</label>
    <input type="text" id="RelacionTemporal" name="RelacionTemporal" value="<?php echo $consultaSaludR['RelacionTemporal'] ?>" required><br><br>
    <?php
    if($consultaSaludR['Trimestre']=="Primero"){
        ?>
        <html>
        <label for="Trimestre">Trimestre gestacional del embarazo:</label>
    <select name="Trimestre" id="Trimestre">
        <option value="Primero" selected>Primero</option>
        <option value="Segundo">Segundo</option>
        <option value="Tercero">Tercero</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaSaludR['Trimestre']=="Segundo"){
    ?>
        <html>
        <label for="Trimestre">Trimestre gestacional del embarazo:</label>
    <select name="Trimestre" id="Trimestre">
        <option value="Primero">Primero</option>
        <option value="Segundo" selected>Segundo</option>
        <option value="Tercero">Tercero</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaSaludR['Trimestre']=="Tercero"){
        ?>
            <html>
            <label for="Trimestre">Trimestre gestacional del embarazo:</label>
        <select name="Trimestre" id="Trimestre">
            <option value="Primero">Primero</option>
            <option value="Segundo">Segundo</option>
            <option value="Tercero" selected>Tercero</option>
        </select><br><br>
            </html>
            <?php
        }
    ?>

    <?php
    if($consultaSaludR['PrimeraVezRiesgo']=="Si"){
        ?>
        <html>
        <label for="PrimeraVezRiesgo">Primera vez alto riesgo durante el embarazo:</label><br>
        <input type="radio" name="opPrimeraVezRiesgo" id="opPrimeraVezRiesgSi" value="Si" checked>
        <label for="opPrimeraVezRiesgSi">Si</label>
        <input type="radio" name="opPrimeraVezRiesgo" id="opPrimeraVezRiesgNo" value="No">
        <label for="opPrimeraVezRiesgNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['PrimeraVezRiesgo']=="No"){
    ?>
        <html>
        <label for="PrimeraVezRiesgo">Primera vez alto riesgo durante el embarazo:</label><br>
        <input type="radio" name="opPrimeraVezRiesgo" id="opPrimeraVezRiesgSi" value="Si" checked>
        <label for="opPrimeraVezRiesgSi">Si</label>
        <input type="radio" name="opPrimeraVezRiesgo" id="opPrimeraVezRiesgNo" value="No">
        <label for="opPrimeraVezRiesgNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['DignosticoDiabetes']=="Si"){
        ?>
        <html>
        <label for="DiagnosticoDiabetes">Diagnóstico de Diabetes Mellitus durante el embarazo:</label><br>
        <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesSi" value="Si" checked>
        <label for="opDiagnosticoDiabetesgSi">Si</label>
        <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesNo" value="No">
        <label for="opDiagnosticoDiabetesNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['DignosticoDiabetes']=="No"){
    ?>
        <html>
        <label for="DiagnosticoDiabetes">Diagnóstico de Diabetes Mellitus durante el embarazo:</label><br>
        <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesSi" value="Si">
        <label for="opDiagnosticoDiabetesgSi">Si</label>
        <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesNo" value="No" checked>
        <label for="opDiagnosticoDiabetesNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['InfeccionUrinaria']=="Si"){
        ?>
        <html>
        <label for="InfeccionUrinaria">Infección urinaria durante el embarazo:</label><br>
        <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaSi" value="Si" checked>
        <label for="opInfeccionUrinariaSi">Si</label>
        <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaNo" value="No">
        <label for="opInfeccionUrinariaNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['InfeccionUrinaria']=="No"){
    ?>
        <html>
        <label for="InfeccionUrinaria">Infección urinaria durante el embarazo:</label><br>
        <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaSi" value="Si">
        <label for="opInfeccionUrinariaSi">Si</label>
        <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaNo" value="No" checked>
        <label for="opInfeccionUrinariaNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['PreeclampsiaEclampsia']=="Si"){
        ?>
        <html>
        <label for="Preeclampsia/Eclampsia">Preeclampsia / Eclampsia:</label><br>
        <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaSi" value="Si" checked>
        <label for="opPreeclampsia/EclampsiaSi">Si</label>
        <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaNo" value="No">
        <label for="opPreeclampsia/EclampsiaNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['PreeclampsiaEclampsia']=="No"){
    ?>
        <html>
        <label for="Preeclampsia/Eclampsia">Preeclampsia / Eclampsia:</label><br>
        <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaSi" value="Si">
        <label for="opPreeclampsia/EclampsiaSi">Si</label>
        <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaNo" value="No" checked>
        <label for="opPreeclampsia/EclampsiaNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['Hemorragia']=="Si"){
        ?>
        <html>
        <label for="Hemorragia">Hemorragia durante el embarazo:</label><br>
        <input type="radio" name="opHemorragia" id="opHemorragiaSi" value="Si" checked>
        <label for="opHemorragiaSi">Si</label>
        <input type="radio" name="opHemorragia" id="opHemorragiaNo" value="No">
        <label for="opHemorragiaNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['Hemorragia']=="No"){
    ?>
        <html>
        <label for="Hemorragia">Hemorragia durante el embarazo:</label><br>
        <input type="radio" name="opHemorragia" id="opHemorragiaSi" value="Si">
        <label for="opHemorragiaSi">Si</label>
        <input type="radio" name="opHemorragia" id="opHemorragiaNo" value="No" checked>
        <label for="opHemorragiaNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['AnalisisClinicos']=="Si"){
        ?>
        <html>
        <label for="AnalisisClinicos">Con análisis clínicos:</label><br>
        <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosSi" value="Si" checked>
        <label for="opAnalisisClinicosSi">Si</label>
        <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosNo" value="No">
        <label for="opAnalisisClinicosNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['AnalisisClinicos']=="No"){
    ?>
        <html>
        <label for="AnalisisClinicos">Con análisis clínicos:</label><br>
        <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosSi" value="Si">
        <label for="opAnalisisClinicosSi">Si</label>
        <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosNo" value="No" checked>
        <label for="opAnalisisClinicosNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['AcidoFolico']=="Si"){
        ?>
        <html>
        <label for="AcidoFolico">Prescripción de ácido fólico:</label><br>
        <input type="radio" name="opAcidoFolico" id="opAcidoFolicoSi" value="Si" checked>
        <label for="opAcidoFolicoSi">Si</label>
        <input type="radio" name="opAcidoFolico" id="opAcidoFolicoNo" value="No">
        <label for="opAcidoFolicoNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaSaludR['AcidoFolico']=="No"){
    ?>
        <html>
        <label for="AcidoFolico">Prescripción de ácido fólico:</label><br>
        <input type="radio" name="opAcidoFolico" id="opAcidoFolicoSi" value="Si">
        <label for="opAcidoFolicoSi">Si</label>
        <input type="radio" name="opAcidoFolico" id="opAcidoFolicoNo" value="No" checked>
        <label for="opAcidoFolicoNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaSaludR['ApoyoTraslado']=="Si"){
        ?>
        <html>
        <label for="ApoyoTraslado">Apoyo a traslado obstétrico:</label><br>
        <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoSi" value="Si" checked>
        <label for="opApoyoTrasladoSi">Si</label>
        <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoNo" value="No">
        <label for="opApoyoTrasladoNo">No</label><br>
        </html>
        <?php
    }else if($consultaSaludR['ApoyoTraslado']=="No"){
    ?>
        <html>
        <label for="ApoyoTraslado">Apoyo a traslado obstétrico:</label><br>
        <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoSi" value="Si">
        <label for="opApoyoTrasladoSi">Si</label>
        <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoNo" value="No" checked>
        <label for="opApoyoTrasladoNo">No</label><br>
        </html>
        <?php
    }
    ?>
    
</fieldset></section>
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