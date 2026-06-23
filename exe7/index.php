<?php require_once 'Viagem.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Planejamento e Custos</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Planejamento e Custos</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

            <label>Origem: <input type="text" name="origem" required></label>
            <label>Destino:<input type="text" name="destino" required></label>
            <label>Distância (km): <input type="number" name="distancia" required></label>
            <label>Tempo Estimado (horas): <input type="number" name="tempo" required></label>
            <label>Tipo de Combustível:</label>
            <select name="combustivel" required>
                <option value="gasolina">Gasolina</option>
                <option value="etanol">Etanol</option>
            </select>
            <label>Consumo do Veículo (km/l): <input type="number" name="consumo" required></label>

            <button type="submit">Calcular Viagem</button>
        </form>
        </div>

        <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $viagem = new Viagem(
                $_POST["origem"],
                $_POST["destino"],
                (float)$_POST["distancia"],
                (float)$_POST["tempo"],
                $_POST["combustivel"],
                (float)$_POST["consumo"]
            );


            echo "<h3> Resultado: <h3>";
            echo $viagem->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>