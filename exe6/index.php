<?php require_once 'ConversorMoeda.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversão Real x Dólar/Euro</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Conversão Real x Dólar/Euro</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">
                <label>Valor em reais:<br>
                    <input type="text" name="valorReais" required>
                </label>

                <label>Moeda de destino:</label>
                <select name="moedaDestino">
                    <option value="USD">Dolar (USD)</option>
                    <option value="EUR">Euro (EUR)</option>
                </select>

                <label>Cotação atual:</label>
                <input type="number" name="cotacao" required><br>

                <input type="submit" value="Converter" class="btn">

            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $conversor = new ConversorMoeda(
                $_POST["valorReais"],
                $_POST["moedaDestino"],
                $_POST["cotacao"]
            );

            echo "<h3> Resultado: </h3>";
            echo $conversor->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>