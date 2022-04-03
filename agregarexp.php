<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgregarExpedientes</title>

    <link rel="stylesheet" href="agregar.css"> <!-- Usada para enlazar CSS externo con el documento HTML actual. -->
    <style> /* Etiqueta de estilo usada para escribir CSS en línea. */ </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
    <div class="titu">
        <div class="titulo">
            <h1>Pacientes</h1>
        </div>
        <nav id="linkmenu">
            <a href="menu.php" id="menu">MENU</a>
        </nav>
    </div>
        <form action="agregaExpediente.php" id="formpacientes" method="post">
            <div class="a">
                <div class="c1f1">
                    <section id="uno">
                        <fieldset>
                            <legend>Identificacion de la Unidad</legend>
                            <label for="NombreUnidad">Nombre de la unidad:</label>
                            <input type="text" id="NombreUnidad" name="NombreUnidad" required><br><br>
                            <label for="PrestadorServicio">Prestador del Servicio:</label>
                            <input type="text" id="PrestadorServicio" name="PrestadorServicio" required><br><br>
                            <label for="Servicio">Servicio:</label>
                            <input type="text" id="Servicio" name="Servicio" required><br><br>
                        </fieldset>
                    </section>

                    <section id="dos">
                        <fieldset>
                            <legend>Datos del Paciente</legend>
                            <label for="Paciente">Paciente</label>
                            <input type="text" name="Paciente" id="Paciente"><br><br>
                            <label for="TipoDeDificultad">Tipo de Dificultad</label><br>

                            <select name="TipoDeDificultad" id="TipoDeDificultad">
                                <option value="Ninguna" id="nd">NINGUNA</option>
                                <option value="Aprender/Recordar">APRENDER / RECORDAR</option>
                                <option value="Caminar">CAMINAR</option>
                                <option value="CuidadoPersonal">CUIDADO PERSONAL</option>
                                <option value="Emocional/Mental">EMOCIONAL / MENTAL</option>
                                <option value="Escuchar">ESCUCHAR</option>
                                <option value="Hablar/Comunicarse">HABLAR / COMUNICARSE</option>
                                <option value="Brazos/Manos">USAR BRAZOS / MANOS</option>
                                <option value="Ver">VER</option>
                            </select><br><br>

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
                        </fieldset>
                    </section>

                    <section id="cuatro">
                        <fieldset>
                            <legend>Consulta</legend>
                            <label for="FechaConsulta">Fecha Consulta</label>
                            <input type="date" id="FechaConsulta" name="FechaConsulta" required><br><br>
                            <label for="RelacionTemporalMot">Relación temporal por motivo:</label><br>
                                <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMot1ra" value="Primera Vez">
                                <label for="opRelacionTemporalMot1ra">Primera Vez</label>
                                <input type="radio" name="opRelacionTemporalMot" id="opRelacionTemporalMotSub" value="Subsecuente">
                                <label for="opRelacionTemporalMotSub">Subsecuente</label><br><br>
                            <label for="Problema">Problema:</label>
                            <input type="text" id="Problema" name="Problema" required><br><br>
                            <label for="Sintomas">Síntomas:</label>
                            <input type="text" id="Sintomas" name="Sintomas" required><br><br>
                            <label for="Objetivo">Objetivo:</label>
                            <input type="text" id="Objetivo" name="Objetivo" required><br><br>
                            <label for="Analisis">Análisis:</label>
                            <input type="text" id="Analisis" name="Analisis" required><br><br>
                            <label for="ResultadosAux">Resultados de Auxiliares de Diagnóstico:</label>
                            <input type="text" id="ResultadosAux" name="ResultadosAux" required><br><br>
                        </fieldset>
                    </section>
                </div>

                <div class="c2f1">
                    <section id="tres">
                        <fieldset>
                            <legend>Signos Vitales y Somatometría</legend>
                            <section id="dosp1">
                                <label for="Peso">Peso (kg):</label>
                                <input type="text" id="Peso" name="Peso" required><br><br>
                                <label for="Talla">Talla (cm):</label>
                                <input type="text" id="Talla" name="Talla" required><br><br>
                                <label for="IMC">Índice de Masa Corporal:</label>
                                <input type="text" id="IMC" name="IMC" required><br><br>
                                <label for="Temperatura">Temperatura (°C)</label>
                                <input type="text" id="Temperatura" name="Temperatura" required><br><br>
                                <label for="TensionArterialS">Tensión Arterial Sistólica (mmHg)</label>
                                <input type="text" id="TensionArterialS" name="TensionArterialS" required><br><br>
                                <label for="TensionArterialD">Tensión Arterial Diastólica (mmHg)</label>
                                <input type="text" id="TensionArterialD" name="TensionArterialD" required><br><br>
                                <label for="FrecuenciaRespiratoria">Frecuencia Respiratoria (por min.)</label>
                                <input type="text" id="FrecuenciaRespiratoria" name="FrecuenciaRespiratoria" required><br><br>
                                <label for="FrecuenciaCardiaca">Frecuencia Cardiaca (por min.):</label>
                                <input type="text" name="FrecuenciaCardiaca" id="FrecuenciaCardiaca"><br><br>
                                <label for="Glucemia">Glucemia (mg/dl)</label>
                                <input type="text" name="Glucemia" id="Glucemia"><br><br>
                            </section>
                            <section id="dosp2">
                                <label for="HorasDesdeComida">¿Tiene más de 8 horas que comió?</label><br>
                                    <input type="radio" name="opHorasComida" id="opHorasComidaSi" value="Si">
                                    <label for="opHorasComidaSi">Si</label>
                                    <input type="radio" name="opHorasComida" id="opHorasComidaNo" value="No">
                                    <label for="opHorasComidaNo">No</label><br><br>
                                <label for="Oximetria">Oximetría (SpO2)</label>
                                <input type="text" name="Oximetria" id="Oximetria"><br><br>
                                <label for="Hemoglobina">Hemoglobina (g/dl)</label>
                                <input type="text" name="Hemoglobina" id="Hemoglobina"><br><br>
                                <label for="Cintura">Cintura (cm)</label>
                                <input type="text" name="Cintura" id="Cintura"><br><br>
                                <label for="Cadera">Cadera (cm)</label>
                                <input type="text" name="Cadera" id="Cadera"><br><br>
                                <label for="Brazo">Circunferencia de Brazo (cm)</label>
                                <input type="text" name="Brazo" id="Brazo"><br><br>
                                <label for="PerimetroCefalico">Perímetro Cefálico (cm)</label>
                                <input type="text" name="PerimetroCefalico" id="PerimetroCefalico"><br><br>
                                <label for="Prematuro">¿El niño es prematuro?</label><br>
                                    <input type="radio" name="opPrematuro" id="opPrematuroSi" value="Si">
                                    <label for="opPrematuroSi">Si</label>
                                    <input type="radio" name="opPrematuro" id="opPrematuroNo" value="No">
                                    <label for="opPrematuroNo">No</label><br><br>
                            </section>
                        </fieldset>
                    </section>
                </div>
            </div>


            <div class="b">
                <div class="c1f2">
                    <section id="cinco">
                        <fieldset>
                            <legend>Salud Reproductiva</legend>
                            <label for="RelacionTemporal">RelacionTemporal:</label>
                            <input type="text" id="RelacionTemporal" name="RelacionTemporal" required><br><br>
                            <label for="Trimestre">Trimestre gestacional del embarazo:</label>
                            <select name="Trimestre" id="Trimestre">
                                <option value="Primero">Primero</option>
                                <option value="Segundo">Segundo</option>
                                <option value="Tercero">Tercero</option>
                            </select><br><br>
                            <label for="PrimeraVezRiesgo">Primera vez alto riesgo durante el embarazo:</label><br>
                                <input type="radio" name="opPrimeraVezRiesg" id="opPrimeraVezRiesgSi" value="Si">
                                <label for="opPrimeraVezRiesgSi">Si</label>
                                <input type="radio" name="opPrimeraVezRiesg" id="opPrimeraVezRiesgNo" value="No">
                                <label for="opPrimeraVezRiesgNo">No</label><br><br>
                            <label for="DiagnosticoDiabetes">Diagnóstico de Diabetes Mellitus durante el embarazo:</label><br>
                                <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesSi" value="Si">
                                <label for="opDiagnosticoDiabetesgSi">Si</label>
                                <input type="radio" name="opDiagnosticoDiabetes" id="opDiagnosticoDiabetesNo" value="No">
                                <label for="opDiagnosticoDiabetesNo">No</label><br><br>
                            <label for="InfeccionUrinaria">Infección urinaria durante el embarazo:</label><br>
                                <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaSi" value="Si">
                                <label for="opInfeccionUrinariaSi">Si</label>
                                <input type="radio" name="opInfeccionUrinaria" id="opInfeccionUrinariaNo" value="No">
                                <label for="opInfeccionUrinariaNo">No</label><br><br>
                            <label for="Preeclampsia/Eclampsia">Preeclampsia / Eclampsia:</label><br>
                                <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaSi" value="Si">
                                <label for="opPreeclampsia/EclampsiaSi">Si</label>
                                <input type="radio" name="opPreeclampsia/Eclampsia" id="opPreeclampsia/EclampsiaNo" value="No">
                                <label for="opPreeclampsia/EclampsiaNo">No</label><br><br>
                            <label for="Hemorragia">Hemorragia durante el embarazo:</label><br>
                                <input type="radio" name="opHemorragia" id="opHemorragiaSi" value="Si">
                                <label for="opHemorragiaSi">Si</label>
                                <input type="radio" name="opHemorragia" id="opHemorragiaNo" value="No">
                                <label for="opHemorragiaNo">No</label><br><br>
                            <label for="AnalisisClinicos">Con análisis clínicos:</label><br>
                                <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosSi" value="Si">
                                <label for="opAnalisisClinicosSi">Si</label>
                                <input type="radio" name="opAnalisisClinicos" id="opAnalisisClinicosNo" value="No">
                                <label for="opAnalisisClinicosNo">No</label><br><br>
                            <label for="AcidoFolico">Prescripción de ácido fólico:</label><br>
                                <input type="radio" name="opAcidoFolico" id="opAcidoFolicoSi" value="Si">
                                <label for="opAcidoFolicoSi">Si</label>
                                <input type="radio" name="opAcidoFolico" id="opAcidoFolicoNo" value="No">
                                <label for="opAcidoFolicoNo">No</label><br><br>
                            <label for="ApoyoTraslado">Apoyo a traslado obstétrico:</label><br>
                                <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoSi" value="Si">
                                <label for="opApoyoTrasladoSi">Si</label>
                                <input type="radio" name="opApoyoTraslado" id="opApoyoTrasladoNo" value="No">
                                <label for="opApoyoTrasladoNo">No</label><br><br>
                        </fieldset>
                    </section>
                </div>

                <div class="c2f2">
                    <section id="seis">
                        <fieldset>
                            <legend>Otros Eventos</legend>
                            <label for="TerapiaHormonal">Terapia hormonal (menopausia):</label><br>
                                <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalSi" value="Si">
                                <label for="opTerapiaHormonalSi">Si</label>
                                <input type="radio" name="opTerapiaHormonal" id="opTerapiaHormonalNo" value="No">
                                <label for="opTerapiaHormonalNo">No</label><br><br>
                            <label for="PeriPostMenopausia">Peri y postmenopausia:</label><br>
                                <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausia1ra" value="Primera vez">
                                <label for="opPeriPostMenopausia1ra">Primera vez</label>
                                <input type="radio" name="opPeriPostMenopausia" id="opPeriPostMenopausiaSub" value="Subsecuente">
                                <label for="opPeriPostMenopausiaSub">Subsecuente</label><br><br>
                            <label for="ITS">Infección de Transmisión Sexual:</label><br>
                                <input type="radio" name="opITS" id="opITS1ra" value="Primera vez">
                                <label for="opITS1ra">Primera vez</label>
                                <input type="radio" name="opITS" id="opITSSub" value="Subsecuente">
                                <label for="opITSSub">Subsecuente</label><br><br>
                            <label for="ApoyoViolencia">Apoyo psicoemocional victimas de violencia intrafamiliar:</label><br>
                                <input type="radio" name="opApoyoViolencia" id="opApoyoViolencia1ra" value="Primera vez">
                                <label for="opApoyoViolencia1ra">Primera vez</label>
                                <input type="radio" name="opApoyoViolencia" id="opApoyoViolenciaSub" value="Subsecuente">
                                <label for="opApoyoViolenciaSub">Subsecuente</label><br><br>
                            <label for="PatologiaMamariaB">Patología mamaria benigna: </label><br>
                                <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaB1ra" value="Primera vez">
                                <label for="opPatologiaMamariaB1ra">Primera vez</label>
                                <input type="radio" name="opPatologiaMamariaB" id="opPatologiaMamariaBSub" value="Subsecuente">
                                <label for="opPatologiaMamariaBSub">Subsecuente</label><br><br>
                            <label for="CancerMamario">Cáncer mamario:</label><br>
                                <input type="radio" name="opCancerMamario" id="opCancerMamario1ra" value="Primera vez">
                                <label for="opCancerMamario1ra">Primera vez</label>
                                <input type="radio" name="opCancerMamario" id="opCancerMamarioSub" value="Subsecuente">
                                <label for="opCancerMamarioSub">Subsecuente</label><br><br>
                            <label for="Colposcopia">Colposcopía:</label><br>
                                <input type="radio" name="opColposcopia" id="opColposcopia1ra" value="Primera vez">
                                <label for="opColposcopia1ra">Primera vez</label>
                                <input type="radio" name="opColposcopia" id="opColposcopiaSub" value="Subsecuente">
                                <label for="opColposcopiaSub">Subsecuente</label><br><br>
                            <label for="CancerCervicouterino">Cáncer cervicouterino:</label><br>
                                <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterino1ra" value="Primera vez">
                                <label for="opCancerCervicouterino1ra">Primera vez</label>
                                <input type="radio" name="opCancerCervicouterino" id="opCancerCervicouterinoSub" value="Subsecuente">
                                <label for="opCancerCervicouterinoSub">Subsecuente</label><br><br>
                        </fieldset>
                    </section>

                    <section id="siete">
                        <fieldset> 
                            <legend>Control y Seguimiento</legend>
                            <label for="ControlSeguimiento">En control y seguimiento:</label><br>
                                <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoSi" value="Si">
                                <label for="opControlSeguimientoSi">Si</label>
                                <input type="radio" name="opControlSeguimiento" id="opControlSeguimientoNo" value="No">
                                <label for="opControlSeguimientoNo">No</label><br><br>
                        </fieldset>
                    </section>
                </div>
            </div>

            <div class="c">
                <input type="button" value="Atrás" id="cerrar" onclick="cierramodal()">
                <input type="submit" value="Guardar" id="guardar">
            </div>
        </form>
    </div>
    <script language="JavaScript"> 
        function cierramodal(){ 
            window.location = 'menu.php';
        } 
    </script> 
    <script>

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
</body>
</html>
