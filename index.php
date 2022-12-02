<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>Actividad Integradora Modulo 1</title>
</head>
<body>
    <h1 style="background-color: lightblue;">PHP y Mysql Inicial - UTN</h1>
    <h2>Actividad Integradora Modulo 1</h2>
    <h2 style="background-color: lightblue;">Alumno: Fermín Rodríguez</h2>
    <br>    
    <p>
    <?php 
        $jugadores = ['Lionel Messi', 'Lautaro Martinez', 'Rodrigo De Paul'];
        $minutos_jugados = [3011, 2648, 3182];
        $goles = [25, 21, 2];
        $asistencias = [9, 4, 6];
        $iterador = [0, 1, 2];
        define ("SELECCION", "GOLEADORES DE LA SCALONETA");
        echo "<h3>", SELECCION, "</h3>";
        foreach ($iterador as $i){
            echo "<ul> 
            <li>Nombre: ", $jugadores[$i]," </li>
            <li>Goles: ",$goles[$i]," </li>
            <li>Asistencias: ",$asistencias[$i]," </li>
            <li>Un gol cada ",round($minutos_jugados[$i]/$goles[$i])," minutos.</li>
            </ul><br>";
        }
    ?>
    </p>
    <form method="post">
        <input type="submit" name="asistidor"
                class="button" value="¿Quién es el máximo asistidor?" />
         
        <input type="submit" name="goleador"
                class="button" value="¿Quién es el máximo Goleador?" />
    </form>
    
    <br>
    <h4>
    <?php
        if(array_key_exists('asistidor', $_POST)) {
            asistidor();
        }
        else if(array_key_exists('goleador', $_POST)) {
            goleador();
        }
        function asistidor() {
            echo "El máximo asistidor es Lionel Messi con 9 asistencias.";
        }
        function goleador() {
            echo "El máximo goleador es Lionel Messi con 25 goles.";
        }
    ?> 

    </h4>
</body>
</html>
