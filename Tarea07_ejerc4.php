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
    <h1>Convertidor de Kilometros a millas</h1>
    <form action="Tarea07_ejerc4.php" method="POST">
        <label for="km">Ingresa la cantidad de kilometros a convertir</label>
        <input type="number" id="km" name="km">
        <br>
        <input type="submit" value="Millas" name="Millas">
    </form>
    <?php
        if (isset($_POST['Millas'])){

            $Kilometros=$_POST['km'];
            $Millas=$Kilometros*0.6214;
            echo "<h2>$Kilometros kilometros son $Millas millas.</h2>";
        }
    ?> 
    <a href="index.html" class="btnRegresar"><b>Regresar</b></a>   
</body>
</html>