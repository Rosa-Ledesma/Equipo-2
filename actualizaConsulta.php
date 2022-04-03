<html>
<?php

    $id = $_POST['id'];
    $FechaConsulta=$_POST['FechaConsulta'];
    $RelacionTemporalMot=$_POST['opRelacionTemporalMot'];
    $Problema=$_POST['Problema'];
    $Sintomas=$_POST['Sintomas'];
    $Objetivo=$_POST['Objetivo'];
    $Analisis=$_POST['Analisis'];
    $ResultadosAux=$_POST['ResultadosAux'];


    $conectar = mysqli_connect("localhost","root","","retho");

    $_UPDATE_SQL="UPDATE consulta set  FechaConsulta='$FechaConsulta', 
                                            RelacionTemporal='$RelacionTemporalMot', 
                                            Problema='$Problema', 
                                            Sintomas='$Sintomas', 
                                            Objetivo='$Objetivo', 
                                            Analisis='$Analisis', 
                                            ResultadosAux='$ResultadosAux' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);

    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>