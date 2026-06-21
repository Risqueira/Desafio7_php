<?php require_once 'Pedido.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de média e status</title>
</head>

<body>

<div class="container">

    <div id="titulo">
     <br><br>   <h2>Total, Desconto e Imposto</h2> <br>
    </div>

    <div class="container-dados">
        <form method="post">
            <label>Nome:<br><input type="text" name="nome" required></label>
            <label>Quantidade:<br><input type="text" name="quant" required></label>
            <label>Preçõ unitario:<br><input type="number" name="preco" required></label>
            <label>Tipo do cliente:<label>
            <select name="tipo" required>
                <option value="normal">Normal</option>
                <option value="premium">Premium</option>
            </select>
            <input type="submit" value="Calcular" class="btn">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $pedido = new Pedido(
        $_POST['nome'],
        (int)$_POST['quant'],
        (float)$_POST['preco'],
        $_POST['tipo']
    );

    echo "<h3> Resultado: <h3>";
    echo $pedido->exibirDetalhes();
    }
    ?>

</div>

</body>

</html>