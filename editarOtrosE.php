<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM otroseventos WHERE IdPaciente='$id'");
        $consultaOtrosE = mysqli_fetch_array($resulta);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">
<div id="modalseis"><form action="actualizaOtrosE.php" id="formOtrosE" method="post">
<section id="seis"><fieldset> 
    <legend>Otros Eventos</legend>
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaOtrosE['IdPaciente'] ?>" readonly><br><br>
    <?php
    if($consultaOtrosE['TerapiaHormonal']=="Si"){
        ?>
        <html>
        <label for="TerapiaHormonal">Terapia hormonal (menopausia):</label><br>
        <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalSi" value="Si" checked>
        <label for="opTerapiaHormonalSi">Si</label>
        <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalNo" value="No">
        <label for="opTerapiaHormonalNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['TerapiaHormonal']=="No"){
    ?>
        <html>
        <label for="TerapiaHormonal">Terapia hormonal (menopausia):</label><br>
        <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalSi" value="Si">
        <label for="opTerapiaHormonalSi">Si</label>
        <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalNo" value="No" checked>
        <label for="opTerapiaHormonalNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['PeriPostMenopausia']=="Primera Vez"){
        ?>
        <html>
        <label for="PeriPostMenopausia">Peri y postmenopausia:</label><br>
        <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausia1ra" value="Primera Vez" checked>
        <label for="opPeriPostMenopausia1ra">Primera vez</label>
        <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausiaSub" value="Subsecuente">
        <label for="opPeriPostMenopausiaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['PeriPostMenopausia']=="Subsecuente"){
    ?>
        <html>
        <label for="PeriPostMenopausia">Peri y postmenopausia:</label><br>
        <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausia1ra" value="Primera Vez">
        <label for="opPeriPostMenopausia1ra">Primera vez</label>
        <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausiaSub" value="Subsecuente" checked>
        <label for="opPeriPostMenopausiaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['ITS']=="Primera Vez"){
        ?>
        <html>
        <label for="ITS">Infección de Transmisión Sexual:</label><br>
        <input type="radio" name="opITS" id="opITS1ra" value="Primera vez" checked>
        <label for="opITS1ra">Primera vez</label>
        <input type="radio" name="opITS" id="opITSSub" value="Subsecuente">
        <label for="opITSSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['ITS']=="Subsecuente"){
    ?>
        <html>
        <label for="ITS">Infección de Transmisión Sexual:</label><br>
        <input type="radio" name="opITS" id="opITS1ra" value="Primera vez">
        <label for="opITS1ra">Primera vez</label>
        <input type="radio" name="opITS" id="opITSSub" value="Subsecuente" checked>
        <label for="opITSSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['ApoyoViolencia']=="Primera Vez"){
        ?>
        <html>
        <label for="ApoyoViolencia">Apoyo psicoemocional victimas de violencia intrafamiliar:</label><br>
        <input type="radio" name="opApoyoViolencia" id="opApoyoViolencia1ra" value="Primera Vez" checked>
        <label for="opApoyoViolencia1ra">Primera vez</label>
        <input type="radio" name="opApoyoViolencia" id="opApoyoViolenciaSub" value="Subsecuente">
        <label for="opApoyoViolenciaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['ApoyoViolencia']=="Subsecuente"){
    ?>
        <html>
        <label for="ApoyoViolencia">Apoyo psicoemocional victimas de violencia intrafamiliar:</label><br>
        <input type="radio" name="opApoyoViolencia" id="opApoyoViolencia1ra" value="Primera Vez">
        <label for="opApoyoViolencia1ra">Primera vez</label>
        <input type="radio" name="opApoyoViolencia" id="opApoyoViolenciaSub" value="Subsecuente" checked>
        <label for="opApoyoViolenciaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
   <?php
    if($consultaOtrosE['PatologiaMamariaB']=="Primera Vez"){
        ?>
        <html>
        <label for="PatologiaMamariaB">Patología mamaria benigna: </label><br>
        <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaB1ra" value="Primera Vez" checked>
        <label for="opPatologiaMamariaB1ra">Primera vez</label>
        <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaBSub" value="Subsecuente">
        <label for="opPatologiaMamariaBSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['PatologiaMamariaB']=="Subsecuente"){
    ?>
        <html>
        <label for="PatologiaMamariaB">Patología mamaria benigna: </label><br>
        <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaB1ra" value="Primera Vez">
        <label for="opPatologiaMamariaB1ra">Primera vez</label>
        <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaBSub" value="Subsecuente" checked>
        <label for="opPatologiaMamariaBSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['CancerMamario']=="Primera Vez"){
        ?>
        <html>
        <label for="CancerMamario">Cáncer mamario:</label><br>
        <input type="radio" name="opCancerMamario" id="opCancerMamario1ra" value="Primera Vez" checked>
        <label for="opCancerMamario1ra">Primera vez</label>
        <input type="radio" name="opCancerMamario" id="opCancerMamarioSub" value="Subsecuente">
        <label for="opCancerMamarioSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['CancerMamario']=="Subsecuente"){
    ?>
        <html>
        <label for="CancerMamario">Cáncer mamario:</label><br>
        <input type="radio" name="opCancerMamario" id="opCancerMamario1ra" value="Primera Vez">
        <label for="opCancerMamario1ra">Primera vez</label>
        <input type="radio" name="opCancerMamario" id="opCancerMamarioSub" value="Subsecuente" checked>
        <label for="opCancerMamarioSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['Colposcopia']=="Primera Vez"){
        ?>
        <html>
        <label for="Colposcopia">Colposcopía:</label><br>
        <input type="radio" name="opColposcopia" id="opColposcopia1ra" value="Primera Vez" checked>
        <label for="opColposcopia1ra">Primera vez</label>
        <input type="radio" name="opColposcopia" id="opColposcopiaSub" value="Subsecuente">
        <label for="opColposcopiaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['Colposcopia']=="Subsecuente"){
    ?>
        <html>
        <label for="Colposcopia">Colposcopía:</label><br>
        <input type="radio" name="opColposcopia" id="opColposcopia1ra" value="Primera Vez">
        <label for="opColposcopia1ra">Primera vez</label>
        <input type="radio" name="opColposcopia" id="opColposcopiaSub" value="Subsecuente" checked>
        <label for="opColposcopiaSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    <?php
    if($consultaOtrosE['CancerCervicouterino']=="Primera Vez"){
        ?>
        <html>
        <label for="CancerCervicouterino">Cáncer cervicouterino:</label><br>
        <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterino1ra" value="Primera Vez" checked>
        <label for="opCancerCervicouterino1ra">Primera vez</label>
        <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterinoSub" value="Subsecuente">
        <label for="opCancerCervicouterinoSub">Subsecuente</label><br><br>
        </html>
        <?php
    }else if($consultaOtrosE['CancerCervicouterino']=="Subsecuente"){
    ?>
        <html>
        <label for="CancerCervicouterino">Cáncer cervicouterino:</label><br>
        <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterino1ra" value="Primera Vez">
        <label for="opCancerCervicouterino1ra">Primera vez</label>
        <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterinoSub" value="Subsecuente" checked>
        <label for="opCancerCervicouterinoSub">Subsecuente</label><br><br>
        </html>
        <?php
    }
    ?>
    
</fieldset></section>
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