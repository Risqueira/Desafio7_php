<?php require_once 'ReservaHotel.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simulação de diária</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Simulação de diária</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

                <label>Nome do Hóspede:</label>
                <input type="text" name="hospede" required>

                <label>Número de Noites:</label>
                <input type="number" name="noites" min="1" required>

                <label>Tipo de Quarto:</label>
                <select name="quarto" required>
                    <option value="simples">Simples</option>
                    <option value="luxo">Luxo</option>
                    <option value="suite">Suíte</option>
                </select>

                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $reserva = new ReservaHotel(
                $_POST["hospede"],
                (int) $_POST["noites"],
                $_POST["quarto"]
            );

            echo "<h3>Resultado:</h3>";
            echo $reserva->exibirDetalhes();
        }

        ?>

    </div>

</body>

</html>