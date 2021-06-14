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
    <h1>Calcula tú ganancia</h1>
    <form action="Tarea07_ejerc2.php" method="POST">
        <label for="cap">Ingresa la cantidad de capital para invertir</label>
        <input type="number" id="cap" name="cap">
        <br>
        <label for="meses">Ingresa la cantidad de meses para tú ganancia</label>
        <input type="number" id="meses" name="meses">
        <br>
        <input type="submit" value="Ganancia" name="Ganancia">
    </form>
    <?php
        if (isset($_POST['Ganancia'])){
            
            $capital = $_POST['cap'];
            $Meses = $_POST['meses'];

            $Ganancia = $capital * 0.02 * $Meses;
            echo "<h2> Su ganancia en $Meses meses es de: $Ganancia </h2>";
        }
    ?>
    <a href="index.html" class="btnRegresar"><b>Regresar</b></a>   
</body>
</html>