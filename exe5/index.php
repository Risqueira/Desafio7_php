<?php require_once 'Produto.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Controle de Estoque</title>
</head>

<body>

    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Controle de Estoque</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">
                <label>Nome:<br><input type="text" name="nome" required></label>
                <label>Estoque:<br><input type="text" name="estoque" required></label>
                <label>Valor unitario:<br><input type="number" name="valorUnit" required></label>

                <label>Operação:</label>
                <select name="operacao">
                    <option value="entrada">Entrada</option>
                    <option value="saida">Saída</option>
                </select>

                <label>Quantidade da Movimentação:</label>
                <input type="number" name="movimentacao" required><br>

                <input type="submit" value="Calcular" class="btn">

            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $produto = new Produto(
                $_POST['nome'],
                (int) $_POST['estoque'],
                (float) $_POST['valorUnit']
            );

            if ($_POST["operacao"] == "entrada") {
                $produto->entradaEstoque($_POST["movimentacao"]);
            } else {
                $produto->saidaEstoque($_POST["movimentacao"]);
            }

            echo "<h3> Resultado: <h3>";
            $produto->exibirDetalhes();
        }
        ?>

    </div>

</body>

</html>