<?php require_once 'CalculadoraFinanceira.php'; ?>

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
            <h2>Parcelamento e Juros</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">

                <label>Valor da compra: <input type="number" name="valor" required></label>
                <label>Parcelas: <input type="number" name="parcelas" required></label>
                <label>Juros mensal: <input type="number" name="juroMensal" required></label>
                <input type="submit" value="Calcular" class="btn">
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $calculadoraFinanceira = new CalculadoraFinanceira(
                (float) $_POST["valor"],
                (float) $_POST["parcelas"],
                (float) $_POST["juroMensal"]
            );


            echo "<h3> Resultado: <h3>";
            echo $calculadoraFinanceira->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>