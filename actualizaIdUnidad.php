<html>
<?php
    include_once("editarIdUni.php");

    $id = $_POST['id'];
    $NombreUnidad=$_POST['NombreUnidad'];
    $PrestadorServicio=$_POST['PrestadorServicio'];
    $Servicio=$_POST['Servicio'];

    $conectar = mysqli_connect("localhost","root","","retho");

    // echo $id ."<br>";
    // echo $rfc ."<br>";
    // echo $nombre ."<br>";
    // echo $curp ."<br>";
    // echo $contrasena ."<br>";
    $_UPDATE_SQL="UPDATE identificaciondelaunidad set NombreUnidad='$NombreUnidad', PrestadorServicio='$PrestadorServicio', Servicio='$Servicio' WHERE IdPaciente=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'paciente.php?id=<?php echo $id ?>';
    </script>
     
</html>
