<?php require_once 'Pessoa.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>IMC e Classificação</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>IMC e Classificação</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

                <label>Nome:</label>
                <input type="text" name="nome" required>

                <label>Peso (kg):</label>
                <input type="number" step="0.01" name="peso" min="1" required>

                <label>Altura (m):</label>
                <input type="number" step="0.01" name="altura" min="0.5" required>

                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $pessoa = new Pessoa(
                $_POST["nome"],
                (float) $_POST["peso"],
                (float) $_POST["altura"]
            );


            echo "<h3> Resultado: <h3>";
            echo $pessoa->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>