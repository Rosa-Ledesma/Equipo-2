<html>
<?php
    include_once("editarIdUni.php");

    $id = $_POST['id'];
    $Peso=$_POST['Peso'];
    $Talla=$_POST['Talla'];
    $IMC=$_POST['IMC'];
    $Temperatura=$_POST['Temperatura'];
    $TensionArterialS=$_POST['TensionArterialS'];
    $TensionArterialD=$_POST['TensionArterialD'];
    $FrecuenciaRespiratoria=$_POST['FrecuenciaRespiratoria'];
    $FrecuenciaCardiaca=$_POST['FrecuenciaCardiaca'];
    $HorasDesdeComida=$_POST['opHorasComida'];
    $Oximetria=$_POST['Oximetria'];
    $Hemoglobina=$_POST['Hemoglobina'];
    $Cintura=$_POST['Cintura'];
    $Cadera=$_POST['Cadera'];
    $Brazo=$_POST['Brazo'];
    $PerimetroCefalico=$_POST['PerimetroCefalico'];
    $Prematuro=$_POST['opPrematuro'];


    $conectar = mysqli_connect("localhost","root","","retho");

    // echo $HorasDesdeComida ."<br>";
    // echo $Prematuro ."<br>";
    // echo $nombre ."<br>";
    // echo $curp ."<br>";
    // echo $contrasena ."<br>";

    $_UPDATE_SQL="UPDATE signosvitales set 
                                            Peso='$Peso', 
                                            Talla='$Talla', 
                                            IMC='$IMC', 
                                            Temperatura='$Temperatura', 
                                            TensionArterialS='$TensionArterialS', 
                                            TensionArterialD='$TensionArterialD', 
                                            FrecuenciaRespiratoria='$FrecuenciaRespiratoria', 
                                            FrecuenciaCardiaca='$FrecuenciaCardiaca', 
                                            HorasDesdeComida='$HorasDesdeComida', 
                                            Oximetria='$Oximetria', 
                                            Hemoglobina='$Hemoglobina', 
                                            Cintura='$Cintura', 
                                            Cadera='$Cadera', 
                                            Brazo='$Brazo', 
                                            PerimetroCefalico='$PerimetroCefalico', 
                                            Prematuro='$Prematuro' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>
