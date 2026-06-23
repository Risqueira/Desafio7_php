<?php require_once 'Funcionario.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

        <div id="titulo">
            <br><br>
            <h2>Calcular media do aluno</h2> <br>
        </div>

        <div class="container-dados">
            <form method="post">
                <label>Nome: <input type="text" name="nome" required></label><br>
                <label>Cargo: <input type="text" name="cargo" required></label><br>
                <label>Salário: <input type="number" step="0.01" name="salario" required></label><br>
                <label>Carga Horária Semanal: <input type="number" name="carga" required></label><br>
                <label>Bônus: <input type="number" step="0.01" name="bonus" required></label><br>
                <label>Horas Extras: <input type="number" name="extras" required></label><br>
                <button type="submit">Calcular</button>
            </form>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $func = new Funcionario(
                $_POST['nome'],
                $_POST['cargo'],
                (float) $_POST['salario'],
                (int) $_POST['carga']
            );

            echo "<h3>Resultado:</h3>";
            echo $func->exibirDetalhes((float) $_POST['bonus'], (int) $_POST['extras']);
        }
        ?>

    </div>
</body>

</html>