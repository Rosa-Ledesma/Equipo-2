<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="estilomenu.css">
</head>
<body>

    <div class="titulo">
        <img class="logo" src="logo_hospital.jpeg" alt="Hospital Materno">
        <h1>Hospital Materno Infaltil de Irapuato</h1>
    </div>
    <div class="contenedor">
        <div>
            <nav id="linkmenu">
                <a href="usuarios.php">Agregar Administrador</a>
                <a href="agregarexp.php">Agregar Expedientes</a>
            </nav>
        </div>

        <div>
            <div class="buscador">
                <form action="">
                    <!-- Cadena a buscar -->
                    <input type="text" id="searchTerm" onkeyup="doSearch()" placeholder="Buscar Paciente">
                </form>
            </div>

            <div id="contabla">
                <table id="datos">
                    <thead>
                        <tr>
                            <th>Expediente</th>
                            <th>Paciente</th>
                            <th>Unidad</th>
                            <th>Visitar</th>
                        </tr>
                    </thead>
                    <!-- th para encabezados -->
                    <!-- Colocar los datos de la BD en las filas en la tabla -->
                    <tbody>
                        <!-- los tr van por filas, renglones
                        y los th y td van por columnas -->

                        <?php
                        // conexion a la base de datos retho tabla usuarios
                        $conectar = mysqli_connect("localhost","root","","retho");
                        $resulta = mysqli_query($conectar, "SELECT * FROM datosdelpaciente");
                        $resulta2 = mysqli_query($conectar, "SELECT * FROM identificaciondelaunidad");

                        //Consulta es un arreglo de la informacion de resulta
                        while ($consulta = mysqli_fetch_array($resulta)) {
                            $consulta2 = mysqli_fetch_array($resulta2)
                            ?>

                            <tr>
                                <td><?php echo $consulta['IdPaciente']?></td>
                                <td><?php echo $consulta['Paciente']?></td>
                                <td><?php echo $consulta2['NombreUnidad']?></td>
                                <!-- Agregamos un link como botón, el click ejecuta su php -->
                                <td class="Visita"><a id="BtnVisitar" href="paciente.php?id=<?php echo $consulta['IdPaciente']; ?>">Visitar</a></td>
                            </tr>

                            <?php
                        }
                        ?>

                        <tr class='noSearch hide'>
                            <td colspan="4"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script para que funcione el buscador -->
    <!-- <script src="buscados.js"></script> -->
    <script language="javascript">
        function doSearch(){
            const tableReg = document.getElementById('datos'); // tabla
            const searchText = document.getElementById('searchTerm').value.toLowerCase(); // buscador
            let total = 0;

            // Recorremos todas las filas con contenido de la tabla
            for (let i = 1; i < tableReg.rows.length; i++) {

                // Si el td tiene la clase "Visita" no se busca en su contenido
                // Visita es de la columna Visitar para los botones

                

                // Si el tr tiene la clase "noSearch" no se busca en su contenido
                if (tableReg.rows[i].classList.contains("noSearch")) {
                    continue;
                }

                let found = false;
                const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

                // Recorremos todas las celdas
                for (let j = 0; j < cellsOfRow.length && !found; j++) {
                    const compareWith = cellsOfRow[j].innerHTML.toLowerCase();

                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {
                        found = true;
                        total++;
                    }
                }

                if (found) {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }

            // mostramos las coincidencias
            const lastTR=tableReg.rows[tableReg.rows.length-1];
            const td=lastTR.querySelector("td");
            lastTR.classList.remove("hide", "red");

            if (searchText == "") {
                lastTR.classList.add("hide");
            } else if (total) {
                td.innerHTML="Se ha encontrado "+total+" coincidencia"+((total>1)?"s":"");
            } else {
                lastTR.classList.add("red");
                td.innerHTML="No se han encontrado coincidencias";
            }
        }
    </script>
</body>
</html>