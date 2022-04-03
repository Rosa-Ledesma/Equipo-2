<html>
<?php
    include_once("editarDatPaciente.php");

    $id = $_POST['id'];
    $Paciente=$_POST['Paciente'];
    $TipoDeDificultad=$_POST['TipoDeDificultad'];
    $GradoDificultad=$_POST['GradoDificultad'];
    $OrigenDificultad=$_POST['OrigenDificultad'];
    $ControlySeguimiento=$_POST['opControlSeguimiento'];

    if($TipoDeDificultad == "Ninguna"){
        $GradoDificultad="";
        $OrigenDificultad="";
    }else{
        $GradoDificultad=$_POST['GradoDificultad'];
        $OrigenDificultad=$_POST['OrigenDificultad'];
    }

    ?>
     
    <?php
    $conectar = mysqli_connect("localhost","root","","retho");

    $_UPDATE_SQL="UPDATE datosdelpaciente set Paciente='$Paciente', ControlySeguimiento='$ControlySeguimiento', TipoDeDificultad='$TipoDeDificultad', GradoDificultad='$GradoDificultad', OrigenDificultad='$OrigenDificultad' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>
