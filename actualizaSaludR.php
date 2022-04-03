<html>
<?php

    $id = $_POST['id'];
    $RelacionTemporal=$_POST['RelacionTemporal'];
    $Trimestre=$_POST['Trimestre'];
    $PrimeraVezRiesgo=$_POST['opPrimeraVezRiesgo'];
    $DignosticoDiabetes=$_POST['opDiagnosticoDiabetes'];
    $InfeccionUrinaria=$_POST['opInfeccionUrinaria'];
    $PreeclampsiaEclampsia=$_POST['opPreeclampsia/Eclampsia'];
    $Hemorragia=$_POST['opHemorragia'];
    $AnalisisClinicos=$_POST['opAnalisisClinicos'];
    $AcidoFolico=$_POST['opAcidoFolico'];
    $ApoyoTraslado=$_POST['opApoyoTraslado'];

    $conectar = mysqli_connect("localhost","root","","retho");

    $_UPDATE_SQL="UPDATE saludreproductiva set 
                                            RelacionTemporal='$RelacionTemporal', 
                                            Trimestre='$Trimestre', 
                                            PrimeraVezRiesgo='$PrimeraVezRiesgo', 
                                            DignosticoDiabetes='$DignosticoDiabetes', 
                                            InfeccionUrinaria='$InfeccionUrinaria', 
                                            PreeclampsiaEclampsia='$PreeclampsiaEclampsia', 
                                            Hemorragia='$Hemorragia', 
                                            AnalisisClinicos='$AnalisisClinicos', 
                                            AcidoFolico='$AcidoFolico',
                                            ApoyoTraslado='$ApoyoTraslado' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>