<html>
    <head>
        <title></title>
    </head>
</html>
<div>
    <?php
    $conectar = mysqli_connect("localhost","root","","retho");
    //Consulta
    $usuario = $_POST['usuario'];
    // $usuario="ADMIN";
    $contraseña=$_POST['contraseña'];
    // $contraseña="ADMIN";

    // $resulta = mysql_query($conectar,"SELECT * FROM")
    $resulta = mysqli_query($conectar, "SELECT * FROM usuarios WHERE RFC='$usuario' and contraseña='$contraseña'");
    // $resulta = mysqli_query($conectar, "SELECT * FROM usuarios");
    $consulta = mysqli_fetch_array($resulta);


    //sirve para almacenar
    $filas = mysqli_num_rows($resulta);

    //Se hace la validacion de los datos
    if($filas){
        header("location:menu.php");
    } else{
    ?>
        <?php
        include("idex.html");
        ?>
        <h3>ERROR! Usuario o contraseña incorrectos</h3>    <?php
    }

    while ($consulta) {
        ?>
        <tr>
            <td><?php $consulta['id']?></td>
            <td><?php $consulta['RFC']?></td>
            <td><?php $consulta['nombre']?></td>
            <td><?php $consulta['CURP']?></td>
            <td><?php $consulta['contraseña']?></td>
    </tr>
        <?php
    }

    ?>
</div>