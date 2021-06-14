<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Intro PHP</title>
</head>
<body id="contenido">
    <h1>Calcula el total de días que se tendrán en "X" número de semanas</h1>
    <form action="Tarea07_ejerc1.php" method="POST" >
        <label for="sem">Ingresa el número de semanas</label>
        <input type="number" id="sem" name="sem">
        <br>
        <input type="submit" value="Dias" name="Dias">
    </form>
    <?php
        if (isset($_POST['Dias'])){

            $dato=$_POST['sem'];

            $Num_Dias = $dato * 7;
            echo "<h2> En $dato semanas son $Num_Dias días </h2>";
        }
    ?>
    <a href="index.html" class="btnRegresar"><b>Regresar</b></a>   
</body>
</html>