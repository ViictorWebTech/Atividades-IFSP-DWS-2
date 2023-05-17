<?php
$num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
$cont = filter_input(INPUT_GET, "cont", FILTER_SANITIZE_SPECIAL_CHARS);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 2 - Criador de Quadrados GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        header {
            margin-top: .5em;
        }

        .numeros a {
            font-size: 5em;
        }

        .voltar {
            font-size: 1.5em;
        }

        .quadrado {
            width: 4em;
            height: 4em;
            color: white;
            font-size: 2.5em;
            text-align: center;
            line-height: 4em;
            margin: 1em 1em 1em 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div>
                <h1>Praticando 2 - Criador de Quadrados</h1>
                <hr>
            </div>
        </header>


        <main>
            <section>
                <div class='row numeros text-center'>
                    <div class="col">
                        <a href="?num=1">1</a>
                    </div>
                    <div class="col">
                        <a href="?num=2">2</a>
                    </div>
                    <div class="col">
                        <a href="?num=5">5</a>
                    </div>
                    <div class="col">
                        <a href="?num=8">8</a>
                    </div>
                    <div class="col">
                        <a href="?num=11">11</a>
                    </div>
                    <div class="col">
                        <a href="?num=32">32</a>
                    </div>
                </div>

            </section>
            <section>
                <div class="row">

                    <?php

                    if (isset($_GET['num'])) {
                        echo "<hr>";

                        $cont = 1;
                        while ($cont <= $_GET['num']) {
                            $num = $cont;
                            echo "<div class='quadrado text-bg-success'>$num</div>";
                            $cont++;
                        }
                        echo "<br> <br>";
                        echo '<a class="voltar" href="criador-quadrados.php">Limpar</a>';
                    }
                    ?>

                </div>
            </section>

        </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>