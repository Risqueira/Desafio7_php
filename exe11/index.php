<?php require_once 'CalculadoraGeometrica.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora Geométrica</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Calculadora Geométrica</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

                <label>Figura:</label>
                <select name="figura" id="figura" onchange="atualizarCampos()" required>
                    <option value="quadrado">Quadrado</option>
                    <option value="retangulo">Retângulo</option>
                    <option value="circulo">Círculo</option>
                </select>

                <label id="label1">Medida Principal:</label>
                <input type="number" step="0.01" name="medida1" required>

                <div id="campo2" style="display:none;">
                    <label>Altura:</label>
                    <input type="number" step="0.01" name="medida2">
                </div>

                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>

         <?php

         if ($_SERVER["REQUEST_METHOD"] == "POST") {

             $figura = $_POST["figura"];
             $medida1 = (float) $_POST["medida1"];
             $medida2 = isset($_POST["medida2"]) ? (float) $_POST["medida2"] : 0;

             $calc = new CalculadoraGeometrica(
                 $figura,
                 $medida1,
                 $medida2
             );

             echo "<h3>Resultado:</h3>";
             echo $calc->exibirDetalhes();
         }

         ?>

    </div>

</body>

</html>