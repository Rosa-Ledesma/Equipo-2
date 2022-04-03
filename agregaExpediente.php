<html>
<?php
    // include_once("usuarios.php");

    $conectar = mysqli_connect("localhost","root","","retho");

        $NombreUnidad=$_POST['NombreUnidad'];
        $PrestadorServicio=$_POST['PrestadorServicio'];
        $Servicio=$_POST['Servicio'];
        mysqli_query($conectar, "INSERT INTO identificaciondelaunidad(NombreUnidad, PrestadorServicio, Servicio) 
                                 VALUES ('$NombreUnidad','$PrestadorServicio','$Servicio')");

        $Paciente=$_POST['Paciente'];
        $TipoDeDificultad=$_POST['TipoDeDificultad'];
        $GradoDificultad=$_POST['GradoDificultad'];
        $OrigenDificultad=$_POST['OrigenDificultad'];
        if($TipoDeDificultad == "Ninguna"){
            $GradoDificultad="";
            $OrigenDificultad="";
        }else{
            $GradoDificultad=$_POST['GradoDificultad'];
            $OrigenDificultad=$_POST['OrigenDificultad'];
        }
        $ControlySeguimiento=$_POST['opControlSeguimiento'];
        mysqli_query($conectar, "INSERT INTO datosdelpaciente(Paciente, ControlySeguimiento, TipoDeDificultad, GradoDificultad, OrigenDificultad) 
                                 VALUES ('$Paciente','$ControlySeguimiento','$TipoDeDificultad','$GradoDificultad','$OrigenDificultad')");

        $Peso=$_POST['Peso'];
        $Talla=$_POST['Talla'];
        $IMC=$_POST['IMC'];
        $Temperatura=$_POST['Temperatura'];
        $TensionArterialS=$_POST['TensionArterialS'];
        $TensionArterialD=$_POST['TensionArterialD'];
        $FrecuenciaRespiratoria=$_POST['FrecuenciaRespiratoria'];
        $FrecuenciaCardiaca=$_POST['FrecuenciaCardiaca'];
        $Glucemia=$_POST['Glucemia'];
        // Glucemia
        $HorasDesdeComida=$_POST['opHorasComida'];
        $Oximetria=$_POST['Oximetria'];
        $Hemoglobina=$_POST['Hemoglobina'];
        $Cintura=$_POST['Cintura'];
        $Cadera=$_POST['Cadera'];
        $Brazo=$_POST['Brazo'];
        $PerimetroCefalico=$_POST['PerimetroCefalico'];
        $Prematuro=$_POST['opPrematuro'];
        mysqli_query($conectar, "INSERT INTO signosvitales(Peso, Talla, IMC, Temperatura, TensionArterialS, TensionArterialD, FrecuenciaRespiratoria, FrecuenciaCardiaca, Glucemia, HorasDesdeComida, Oximetria, Hemoglobina, Cintura, Cadera, Brazo, PerimetroCefalico, Prematuro) 
                                 VALUES ('$Peso','$Talla','$IMC','$Temperatura','$TensionArterialS', '$TensionArterialD', '$FrecuenciaRespiratoria', '$FrecuenciaCardiaca', '$Glucemia','$HorasDesdeComida','$Oximetria','$Hemoglobina','$Cintura','$Cadera','$Brazo','$PerimetroCefalico','$Prematuro')");

        $FechaConsulta=$_POST['FechaConsulta'];
        $RelacionTemporalMot=$_POST['opRelacionTemporalMot'];
        $Problema=$_POST['Problema'];
        $Sintomas=$_POST['Sintomas'];
        $Objetivo=$_POST['Objetivo'];
        $Analisis=$_POST['Analisis'];
        $ResultadosAux=$_POST['ResultadosAux'];
        mysqli_query($conectar, "INSERT INTO consulta(FechaConsulta, RelacionTemporal, Problema, Sintomas, Objetivo, Analisis, ResultadosAux) 
                                 VALUES ('$FechaConsulta','$RelacionTemporalMot','$Problema','$Sintomas','$Objetivo', '$Analisis', '$ResultadosAux')");

        $RelacionTemporal=$_POST['RelacionTemporal'];
        $Trimestre=$_POST['Trimestre'];
        $PrimeraVezRiesgo=$_POST['opPrimeraVezRiesg'];
        $DignosticoDiabetes=$_POST['opDiagnosticoDiabetes'];
        $InfeccionUrinaria=$_POST['opInfeccionUrinaria'];
        $PreeclampsiaEclampsia=$_POST['opPreeclampsia/Eclampsia'];
        $Hemorragia=$_POST['opHemorragia'];
        $AnalisisClinicos=$_POST['opAnalisisClinicos'];
        $AcidoFolico=$_POST['opAcidoFolico'];
        $ApoyoTraslado=$_POST['opApoyoTraslado'];
        mysqli_query($conectar, "INSERT INTO saludreproductiva(RelacionTemporal, Trimestre, PrimeraVezRiesgo, DignosticoDiabetes, InfeccionUrinaria, PreeclampsiaEclampsia, Hemorragia, AnalisisClinicos, AcidoFolico, ApoyoTraslado) 
                                 VALUES ('$RelacionTemporal','$Trimestre','$PrimeraVezRiesgo','$DignosticoDiabetes','$InfeccionUrinaria', '$PreeclampsiaEclampsia', '$Hemorragia', '$AnalisisClinicos', '$AcidoFolico','$ApoyoTraslado')");

        $TerapiaHormonal=$_POST['opTerapiaHormonal'];
        $PeriPostMenopausia=$_POST['opPeriPostMenopausia'];
        $ITS=$_POST['opITS'];
        $ApoyoViolencia=$_POST['opApoyoViolencia'];
        $PatologiaMamariaB=$_POST['opPatologiaMamariaB'];
        $CancerMamario=$_POST['opCancerMamario'];
        $Colposcopia=$_POST['opColposcopia'];
        $CancerCervicouterino=$_POST['opCancerCervicouterino'];
        mysqli_query($conectar, "INSERT INTO otroseventos(TerapiaHormonal, PeriPostMenopausia, ITS, ApoyoViolencia, PatologiaMamariaB, CancerMamario, Colposcopia, CancerCervicouterino) 
                                 VALUES ('$TerapiaHormonal','$PeriPostMenopausia','$ITS','$ApoyoViolencia','$PatologiaMamariaB','$CancerMamario','$Colposcopia','$CancerCervicouterino')");  
     ?>
     <script language="JavaScript"> 
     window.location = 'menu.php';
    </script> 
     
