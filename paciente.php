<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>

    <link rel="stylesheet" href="estiloexpe.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="titu">
        <img class="imagen" src="doctores.jpeg" alt="">
        <h2 id="titulo">Hospital Materno Infantil de Irapuato</h2>
        <nav id="linkmenu">
            <a href="menu.php" id="menu">MENU</a>
            <!-- target="_blank" es para abrir otra pestaña -->
        </nav>
    </div>
    <br><br>

    <div class="seccionesli">
        <ul class="tabs">
            <li><a href="#tab1"><span></span><span class="tab-text">Identificacion de la unidad</span></a></li>
            <li><a href="#tab2"><span></span><span class="tab-text">Datos del paciente</span></a></li>
            <li><a href="#tab3"><span></span><span class="tab-text">Signos Vitales y Somatometría</span></a></li>
            <li><a href="#tab4"><span></span><span class="tab-text">Consulta</span></a></li>
            <li><a href="#tab5"><span></span><span class="tab-text">Salud Reproductiva</span></a></li>
            <li><a href="#tab6"><span></span><span class="tab-text">Otros eventos</span></a></li>
            <li><a href="#tab7"><span></span><span class="tab-text">Control y seguimiento</span></a></li>
        </ul>
        <?php
        // conexion a la base de datos retho tabla identificaciondelaunidad
            $conectar = mysqli_connect("localhost","root","","retho");
            $id = $_GET['id'];
        ?>
        <div class="secciones">
            <article id="tab1">
                <h2 class="titulos">Identificacion de la unidad<a id="BtnEditar" class="ClaseBtnEditar" href="editarIdUni.php?id=<?php echo $id ?>&modal=1">Editar</a></h2>
                
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Nombre de la Unidad</th>
                        <th>Prestador del Servicio</th>
                        <th>Servicio</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla signosvitales
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM identificaciondelaunidad WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['IdPaciente']?></td>
                            <td><?php echo $consulta['NombreUnidad']?></td>
                            <td><?php echo $consulta['PrestadorServicio']?></td>
                            <td><?php echo $consulta['Servicio']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab2">
                <h2 class="titulos">Datos del paciente<a id="BtnEditar"  class="ClaseBtnEditar" href="editarDatPaciente.php?id=<?php echo $id ?>&modal=2">Editar</a></h2>
                
                <table>
                    <thead>
                        <th>Paciente</th>
                        <th>Tipo de Dificultad</th>
                        <th>Grado de Dificultad</th>
                        <th>Origen de Dificultad</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla datosdelpaciente
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM datosdelpaciente WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['Paciente']?></td>
                            <td><?php echo $consulta['TipoDeDificultad']?></td>
                            <td><?php echo $consulta['GradoDificultad']?></td>
                            <td><?php echo $consulta['OrigenDificultad']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab3">
                <h2 class="titulos">Signos Vitales y Somatometría <a id="BtnEditar"  class="ClaseBtnEditar" href="editarSVyS.php?id=<?php echo $id ?>&modal=3">Editar</a></h2>
                
                <table>
                    <thead>
                        <th><p>Peso</p>
                            <p>(kg)</p></th>
                        <th><p>Talla</p>
                            <p>(m)</p></th>
                        <th>Indice de masa corporal</th>
                        <th><p>Temperatura</p>
                            <p>(°C)</p></th>
                        <th><p>Tensión Arterial Sistólica</p>
                            <p> (mmHg)</p></th>
                        <th><p>Tensión Arterial Diastólica</p>
                            <p>(mmHg)</p></th>
                        <th><p>Frecuencia Respiratoria</p>
                            <p>(por min.)</p></th>
                        <th><p>Frecuencia Cardiaca</p>
                            <p>(por min.)</p></th>
                        <th><p>Glucemia</p>
                            <p>(mg/dl)</p></th>
                        <th>¿Tiene más de 8 horas que comió?</th>
                        <th><p>Oximetría</p>
                            <p>(SpO2)</p></th>
                        <th><p>Hemoglobina</p>
                            <p>(g/dl)</p></th>
                        <th><p>Cintura</p>
                            <p>(cm)</p></th>
                        <th><p>Cadera</p>
                            <p>(cm)</p></th>
                        <th><p> Circunferencia de Brazo</p>
                            <p>(cm)</p></th>
                        <th><p>Perímetro Cefálico</p>
                            <p>(cm)</p></th>
                        <th>¿El niño es prematuro?</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla signosvitales
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM signosvitales WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['Peso']?></td>
                            <td><?php echo $consulta['Talla']?></td>
                            <td><?php echo $consulta['IMC']?></td>
                            <td><?php echo $consulta['Temperatura']?></td>
                            <td><?php echo $consulta['TensionArterialS']?></td>
                            <td><?php echo $consulta['TensionArterialD']?></td>
                            <td><?php echo $consulta['FrecuenciaRespiratoria']?></td>
                            <td><?php echo $consulta['FrecuenciaCardiaca']?></td>
                            <td><?php echo $consulta['Glucemia']?></td>
                            <td><?php echo $consulta['HorasDesdeComida']?></td>
                            <td><?php echo $consulta['Oximetria']?></td>
                            <td><?php echo $consulta['Hemoglobina']?></td>
                            <td><?php echo $consulta['Cintura']?></td>
                            <td><?php echo $consulta['Cadera']?></td>
                            <td><?php echo $consulta['Brazo']?></td>
                            <td><?php echo $consulta['PerimetroCefalico']?></td>
                            <td><?php echo $consulta['Prematuro']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab4">
                <h2 class="titulos">Consulta<a id="BtnEditar"  class="ClaseBtnEditar" href="editarConsulta.php?id=<?php echo $id ?>&modal=4">Editar</a></h2>
     
                <table>
                    <thead>
                        <th>Fecha de consulta</th>
                        <th>Relación temporal por motivo </th>
                        <th>Problema</th>
                        <th>Síntomas</th>
                        <th>Objetivo</th>
                        <th>Análisis</th>
                        <th>Resultados de Auxiliares de Diagnóstico</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla dconsulta
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM consulta WHERE IdPaciente='$id'"); 

                    //Consulta es un arreglo de la informacion de resulta
                    while ($consulta = mysqli_fetch_array($resulta)) {
                    ?>
                        <tr id="tdConsulta">
                            <td><?php echo $consulta['FechaConsulta']?></td>
                            <td><?php echo $consulta['RelacionTemporal']?></td>
                            <td><?php echo $consulta['Problema']?></td>
                            <td><?php echo $consulta['Sintomas']?></td>
                            <td><?php echo $consulta['Objetivo']?></td>
                            <td><?php echo $consulta['Analisis']?></td>
                            <td><?php echo $consulta['ResultadosAux']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab5">
                <h2 class="titulos">Salud Reproductiva<a id="BtnEditar"  class="ClaseBtnEditar" href="editarSaldR.php?id=<?php echo $id ?>&modal=5">Editar</a></h2>
                
                <table>
                    <thead>
                        <th>Relacion temporal embarazo</th>
                        <th>Trimestre gestacional del embarazo </th>
                        <th>Primera vez alto riesgo durante el embarazo</th>
                        <th>Diagnóstico de Diabetes Mellitus durante el embarazo</th>
                        <th>Infección urinaria durante el embarazo</th>
                        <th>Preeclampsia / Eclampsia</th>
                        <th>Hemorragia durante el embarazo</th>
                        <th>Con análisis clínicos</th>
                        <th>Prescripción de ácido fólico</th>
                        <th>Apoyo a traslado obstétrico</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla saludreproductiva
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM saludreproductiva WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['RelacionTemporal']?></td>
                            <td><?php echo $consulta['Trimestre']?></td>
                            <td><?php echo $consulta['PrimeraVezRiesgo']?></td>
                            <td><?php echo $consulta['DignosticoDiabetes']?></td>
                            <td><?php echo $consulta['InfeccionUrinaria']?></td>
                            <td><?php echo $consulta['PreeclampsiaEclampsia']?></td>
                            <td><?php echo $consulta['Hemorragia']?></td>
                            <td><?php echo $consulta['AnalisisClinicos']?></td>
                            <td><?php echo $consulta['AcidoFolico']?></td>
                            <td><?php echo $consulta['ApoyoTraslado']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab6">
                <h2 class="titulos">Otros eventos<a id="BtnEditar"  class="ClaseBtnEditar" href="editarOtrosE.php?id=<?php echo $id ?>&modal=5">Editar</a></h2>
                
                <table>
                    <thead>
                        <th>Terapia hormonal (menopausia)</th>
                        <th>Peri y postmenopausia</th>
                        <th>Infección de Transmisión Sexual</th>
                        <th>Apoyo psicoemocional victimas de violencia intrafamiliar</th>
                        <th>Patología mamaria benigna</th>
                        <th>Cáncer mamario</th>
                        <th>Colposcopía</th>
                        <th>Cáncer cervicouterino</th>
                    </thead>
                    <tbody>
                    <?php
                    // conexion a la base de datos retho tabla otroseventos
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM otroseventos WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['TerapiaHormonal']?></td>
                            <td><?php echo $consulta['PeriPostMenopausia']?></td>
                            <td><?php echo $consulta['ITS']?></td>
                            <td><?php echo $consulta['ApoyoViolencia']?></td>
                            <td><?php echo $consulta['PatologiaMamariaB']?></td>
                            <td><?php echo $consulta['CancerMamario']?></td>
                            <td><?php echo $consulta['Colposcopia']?></td>
                            <td><?php echo $consulta['CancerCervicouterino']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                </table>
            </article>
            <article id="tab7">
                <h2 class="titulos">Control y seguimiento<a id="BtnEditar"  class="ClaseBtnEditar" href="editarDatPaciente.php?id=<?php echo $id ?>&modal=2">Editar</a></h2>
                <table>
                    <thead>
                        <th>En control y seguimiento</th>
                        <tbody>
                    <?php
                    // conexion a la base de datos retho tabla otroseventos
                    $conectar = mysqli_connect("localhost","root","","retho");
                    $resulta = mysqli_query($conectar, "SELECT * FROM datosdelpaciente WHERE IdPaciente='$id'");

                    //Consulta es un arreglo de la informacion de resulta
                    while ( $consulta = mysqli_fetch_array($resulta)) {
                        ?>
                        <tr>
                            <td><?php echo $consulta['ControlySeguimiento']?></td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                    </thead>
                </table>
            </article>
        </div>
    </div>
    <script >
        $(document).ready(function() {
            $('#TipoDeDificultad').change(function(e) {
                if ($(this).val() === "Ninguna") {
                    $('#godd').prop("disabled", false);
                    document.getElementById("godd").style.display = "none";
                } else {
                    $('#godd').prop("disabled", true);
                    document.getElementById("godd").style.display = "block";
                }
            })
        });
        
    </script>
    <script language="JavaScript"> 
    // uno
    let modaluno=document.getElementById("modaluno");
        function abremodaluno(){ 
            modaluno.style.display="block";}
        function cierramodaluno(){ 
            modaluno.style.display="none";} 
    // dos
    let modaldos=document.getElementById("modaldos");
        function abremodaldos(){ 
            modaldos.style.display="block";}
        function cierramodaldos(){ 
            modaldos.style.display="none";} 
    // tres 
    let modaltres=document.getElementById("modaltres");
        function abremodaltres(){ 
            modaltres.style.display="block";}
        function cierramodaltres(){ 
            modaltres.style.display="none";} 
    // cuatro
    let modalcuatro=document.getElementById("modalcuatro");
        function abremodaluno(){ 
            modaluno.style.display="block";}
        function cierramodaluno(){ 
            modaluno.style.display="none";} 
    // cinco
    let modalcinco=document.getElementById("modalcinco");
        function abremodaluno(){ 
            modaluno.style.display="block";}
        function cierramodaluno(){ 
            modaluno.style.display="none";} 
    // seis
    let modalseis=document.getElementById("modalseis");
        function abremodaluno(){ 
            modaluno.style.display="block";}
        function cierramodaluno(){ 
            modaluno.style.display="none";} 
    // siete
    let modalsiete=document.getElementById("modalsiete");
        function abremodaluno(){ 
            modaluno.style.display="block";}
        function cierramodaluno(){ 
            modaluno.style.display="none";} 
</script> 
</body>
</html>