<?php require_once 'Aluno.php'; ?>

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
     <br><br>   <h2>Calcular media do aluno</h2> <br>
    </div>

    <div class="container-dados">
        <form method="post">
            <label>Nome: <br><input type="text" name="nome" required></label>
            <label>Disciplina: <br><input type="text" name="disciplina" required></label>
            <label>Nota 1: <br><input type="number" name="n1" required></label>
            <label>Nota 2: <br><input type="number" name="n2" required></label>
            <label>Nota 3: <br><input type="number" name="n3" required></label><br>
            <input type="submit" value="Calcular" class="btn">
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $aluno = new Aluno(
        $_POST['nome'],
        $_POST['disciplina'],
        (float)$_POST['n1'],
        (float)$_POST['n2'],
        (float)$_POST['n3']
    );

    echo "<h3> Resultado: <h3>";
    echo $aluno->exibirDetalhes();
    }
    ?>

</div>

</body>

</html>