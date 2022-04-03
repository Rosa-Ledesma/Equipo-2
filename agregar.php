
<html>
<?php
    include_once("usuarios.php");

    
    $conectar = mysqli_connect("localhost","root","","retho");
    $resulta = mysqli_query($conectar, "SELECT * FROM usuarios");
    $consulta = mysqli_fetch_array($resulta);

    $rfc=$_POST['RFC'];
    $nombre=$_POST['nombre'];
    $curp=$_POST['CURP'];
    $contrasena=$_POST['contrasena'];
    $id = $_POST['id'];


    // echo "RFC - $rfc <br>";
    // echo "nombre - $nombre <br>";
    // echo "CURP - $curp <br>";
    // echo "contraseña - $contrasena <br>";
     mysqli_query($conectar, "INSERT INTO usuarios(RFC, nombre, CURP, contraseña) VALUES ('$rfc','$curp','$nombre','$contrasena')");  
     ?>
     <script language="JavaScript"> 
     window.location = 'usuarios.php';
    </script> 
     
</html>

