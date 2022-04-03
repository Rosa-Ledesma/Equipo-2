<!DOCTYPE html>
<html lang="es">
    <?php
        $conectar = mysqli_connect("localhost","root","","retho");
        $id = $_GET['id'];
        $modal = $_GET['modal'];
        $resulta = mysqli_query($conectar, "SELECT * FROM identificaciondelaunidad WHERE IdPaciente='$id'");
        $consultaIdUnidad = mysqli_fetch_array($resulta);
        $resulta = mysqli_query($conectar, "SELECT * FROM datosdelpaciente WHERE IdPaciente='$id'");
        $consultaDatosPaciente = mysqli_fetch_array($resulta);
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="estiloexp.css">
</head>
<body id="datos">

     <div id="modaldos">
         <form action="actualizaDatPaciente.php" id="formDatosPaciente" method="post">
    <section id="dos"><fieldset>
    <legend>Datos del Paciente</legend>
    <label for="id">Expediente:</label>
    <input type="text" id="id" name="id" value="<?php echo $consultaDatosPaciente['IdPaciente'] ?>" readonly><br><br>
    <label for="Paciente">Paciente</label>
    <input type="text" name="Paciente" id="Paciente" value="<?php echo $consultaDatosPaciente['Paciente'] ?>"><br><br>
    <?php
    if($consultaDatosPaciente['ControlySeguimiento']=="Si"){
        ?>
        <html>
        <label for="ControlSeguimiento">En control y seguimiento:</label><br>
        <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoSi" value="Si" checked>
        <label for="opControlSeguimientoSi">Si</label>
        <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoNo" value="No">
        <label for="opControlSeguimientoNo">No</label><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['ControlySeguimiento']=="No"){
    ?>
        <html>
        <label for="ControlSeguimiento">En control y seguimiento:</label><br>
        <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoSi" value="Si">
        <label for="opControlSeguimientoSi">Si</label>
        <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoNo" value="No" checked>
        <label for="opControlSeguimientoNo">No</label><br><br>
        </html>
        <?php
    }
    ?>
    <label for="TipoDeDificultad">Tipo de Dificultad</label>
    <?php
    if($consultaDatosPaciente['TipoDeDificultad']=="Ninguna"){
        ?>
        <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna" selected>NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Aprender/Recordar"){
    ?>
        <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar" selected>APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Caminar"){
        ?>
        <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar" selected>CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="CuidadoPersonal"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal" selected>CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Emocional/Mental"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental" selected>EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Escuchar"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar" selected>ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Hablar/Comunicarse"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse" selected>HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Brazos/Manos"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos" selected>USAR BRAZOS / MANOS</option>
        <option value="Ver">VER</option>
    </select><br><br>
        </html>
        <?php
    }else if($consultaDatosPaciente['TipoDeDificultad']=="Ver"){
    ?>
    <html>
        <select name="TipoDeDificultad" id="TipoDeDificultad" >
        <option value="Ninguna">NINGUNA</option>    
        <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
        <option value="Caminar">CAMINAR</option>
        <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
        <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
        <option value="Escuchar">ESCUCHAR</option>
        <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
        <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
        <option value="Ver" selected>VER</option>
    </select><br><br>
        </html>
        <?php
    }?>

    <div id="godd" style="display: none;">

                    <label for="GradoDificultad">Grado de Dificultad</label>
                <select name="GradoDificultad" id="GradoDificultad">
                    <option value="MUCHA DIFICULTAD">MUCHA DIFICULTAD</option>
                    <option value="NO PUEDE HACERLO">NO PUEDE HACERLO</option>
                    <option value="POCA DIFICULTAD">POCA DIFICULTAD</option>
                </select><br><br>

                <label for="OrigenDificultad">Origen de Dificultad</label>
                <select name="OrigenDificultad" id="OrigenDificultad">
                    <option value="ACCIDENTE">ACCIDENTE</option>
                    <option value="EDAD AVANZADA">EDAD AVANZADA</option>
                    <option value="ENFERMEDAD">ENFERMEDAD</option>
                    <option value="NACIO ASI">NACIO ASI</option>
                    <option value="OTRA CAUSA">OTRA CAUSA</option>
                    <option value="VIOLENCIA">VIOLENCIA</option>
                </select><br><br>
                </div>
    </fieldset></section>
    <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
    <input type="submit" value="Guardar" id="actualizar" onclick="cierramodal()">
</form></div>


    <script language="JavaScript"> 
        let modal=document.getElementById("modaluno");
        modal.style.display="block";
        function abremodal(){ 
            modal.style.display="block";
        } 
        function cierramodal(){ 
            // modal.style.display="none";
            window.location = 'paciente.php?id=<?php echo $id ?>';
        } 
    </script> 
    <?php
        include_once("paciente.php");
    ?> 
    
</body>
</html>