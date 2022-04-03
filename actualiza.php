<html>
<?php
    include_once("editar.php");

    $id = $_POST['id'];
    $rfc=$_POST['RFC'];
    $nombre=$_POST['nombre'];
    $curp=$_POST['CURP'];
    $contrasena=$_POST['contrasena'];

    $conectar = mysqli_connect("localhost","root","","retho");

    echo $id ."<br>";
    echo $rfc ."<br>";
    echo $nombre ."<br>";
    echo $curp ."<br>";
    echo $contrasena ."<br>";
    $_UPDATE_SQL="UPDATE usuarios set RFC='$rfc', nombre='$nombre', CURP='$curp', contraseña='$contrasena' WHERE id=$id";
    mysqli_query($conectar,$_UPDATE_SQL);


    ?>
    <script language="JavaScript"> 
     window.location = 'usuarios.php';
    </script>
     
</html>
