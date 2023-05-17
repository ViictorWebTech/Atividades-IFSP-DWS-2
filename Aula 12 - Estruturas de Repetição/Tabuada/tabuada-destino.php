<?php
$numero = filter_input(INPUT_GET, "numero", FILTER_SANITIZE_SPECIAL_CHARS);
$resultado = filter_input(INPUT_GET, "resultado", FILTER_SANITIZE_SPECIAL_CHARS);
$cont = filter_input(INPUT_GET, "cont", FILTER_SANITIZE_SPECIAL_CHARS);


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        header {
            margin-top: .5em;
        }

    </style>
</head>

<body>
    <div class="container">
        <section class="topo">
            <header>
                <div>
                    <h1>Tabuada</h1>
                    <hr>
                </div>
            </header>
        </section>

        <section class="conteudo">
            <main>
                <div>
                    <h4>Número escolhido foi <?= $numero; ?> </h4>
                    <div class="text-center">
                        <?php
                        $cont = 1;
                        while ($cont <= 10) {
                            $resultado = $numero * $cont;
                            echo "<p>$numero x $cont = $resultado</p>";
                            $cont++;
                        }
                        ?>
                    </div>
                </div>
            </main>
        </section>


        <footer>
            <div>
                <a href="tabuada.php">Voltar</a>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>