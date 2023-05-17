<?php
$nota1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
$nota2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
$nota3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);
$resultado = filter_input(INPUT_POST, "resultado", FILTER_SANITIZE_SPECIAL_CHARS);
$classificacao = filter_input(INPUT_POST, "classificacao", FILTER_SANITIZE_SPECIAL_CHARS);
$cortxt = filter_input(INPUT_POST, "cortexto", FILTER_SANITIZE_SPECIAL_CHARS);

$resultado = ($nota1 + $nota2  + $nota3) / 3;

if ($resultado >= 6) {
    $classificacao = "APROVADO";
    $cortxt = "#1c9f17";
} elseif ($resultado <= 4) {
    $classificacao = "REPROVADO";
    $cortxt = "#bd0000";
} elseif (($resultado < 6) and ($resultado > 4)) {
    $classificacao = "DE RECUPERAÇÃO";
    $cortxt = "#f9cc00";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        header {
            margin-top: .5em;
        }

        .negrito {
            font-weight: bold;
        }

        .classificacao {
            text-decoration: underline;
            color: <?= $cortxt; ?>;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Praticando - Calculadora Média</h1>
            <hr>
        </header>

        <section class="count">
            <div class="texto">
                <p>Um aluno com as notas <span class="negrito"><?= $nota1; ?></span>, <span class="negrito"><?= $nota2; ?></span> e <span class="negrito"><?= $nota3; ?></span> tem uma média igual a <span class="negrito"><?= $resultado; ?></span></p>
                <br><br>
                <p>Com essa média o aluno está <span class="classificacao"><?= $classificacao; ?></span></p>
            </div>
        </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>