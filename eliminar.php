<html>
    <?php
    include_once("usuarios.php");

    //Conexion co la base de datos
    $conectar = mysqli_connect("localhost","root","","retho");
    //Toma el id enviado y lo compara en la tabla usuarios
    $id = $_GET['id'];
    $_DELETE_SQL = "DELETE FROM usuarios WHERE id='$id'";
    mysqli_query($conectar,$_DELETE_SQL);
    ?>
    <script language="JavaScript"> 
     window.location = 'usuarios.php';
    </script> 
</html>