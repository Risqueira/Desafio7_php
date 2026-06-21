<?php require_once 'Carro.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Autonomia e Revisão</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Autonomia e Revisão</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

                <label>Modelo:<br><input type="text" name="modelo" required></label>
                <br>
                <label>Tipo do cliente:</label>
                <select name="combustivel" required>
                    <option value="gasolina">Gasolina</option>
                    <option value="etanol">Etanol</option>
                </select>

                <label>Tanque(L): <br><input type="number" name="tanque" required></label>
                <label>Consumo(Km/L): <br><input type="number" name="consumo" required></label>
                <label>Km rodados: <br><input type="number" name="kmRodados" required></label>

                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $carro = new Carro(
                $_POST['modelo'],
                $_POST['combustivel'],
                (float) $_POST['tanque'],
                (float) $_POST['consumo'],
                (float) $_POST['kmRodados']
            );

            echo "<h3> Resultado: <h3>";
            echo $carro->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>