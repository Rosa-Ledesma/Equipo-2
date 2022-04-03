<html>
    <?php
    include_once("index.php");

    //Conexion co la base de datos
    $conectar = mysqli_connect("localhost","root","","retho");
    //Toma el id enviado y lo compara en la tabla usuarios
    $id = $_GET['IdPaciente'];
    $_DELETE_SQL = "DELETE FROM identificaciondelaunidad WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    $_DELETE_SQL = "DELETE FROM datosdelpaciente WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    $_DELETE_SQL = "DELETE FROM signosvitales WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    $_DELETE_SQL = "DELETE FROM consulta WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    $_DELETE_SQL = "DELETE FROM saludreproductiva WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    $_DELETE_SQL = "DELETE FROM otroseventos WHERE IdPaciente='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    ?>
    <script language="JavaScript"> 
     window.location = 'usuarios.php';
    </script> 
</html>