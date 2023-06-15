<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 1 - Funções Built-in e Coleções (Arrays)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        header {
            margin-top: .5em;
        }

        button {
            margin-right: .5em;
        }
    </style>

</head>

<body>
    <div class="container">
        <header>
            <div class="header">
                <h1>Praticando 1 - Funções Built-in e Coleções (Arrays)</h1>
                <hr>
            </div>
        </header>

        <main>

            <div class="row">
                <div class="col-6 border-end">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Texto: </label>
                            <textarea rows="3" class="form-control" name="mensagem" title="mensagem" required> </textarea>
                        </div>

                        <div class="d-flex">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="reset" class="btn btn-warning">Limpar</button>
                        </div>
                </div>


                <div class="col-6">
                    <?php
                    $texto = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

                    if (isset($texto)) {
                        $data = array(date('d/m/Y'), date('H:i'));
                        echo "<p class='text-end'>Hoje é dia <span class='fw-bold'>$data[0]</span> e agora são <span class='fw-bold'>$data[1]</span>.</p>";


                        echo "<h5>Texto informado</h5>";
                        $cores = array(
                            'vermelho' =>  '<span class="fw-bolder" style="color:red;">vermelho</span>',
                            'azul' => '<span class="fw-bolder" style="color:blue;">azul</span>',
                            'verde' => '<span class="fw-bolder" style="color:green;">verde</span>'
                        );
                        $colorir = str_replace(array_keys($cores), ($cores), $texto);
                        echo "<p>" . $colorir . "</p>";
                        echo "<hr>";

                        echo "<h5>Texto em maiúsculo</h5>";
                        echo "<p>" . strtoupper($texto) . "</p>";
                        echo "<hr>";

                        echo '<h5>Existe a string "web"? </h5>';
                        $varweb = "web";
                        if (stripos($texto, $varweb) === false) {
                            echo "<p>NÂO</p>";
                        } else {
                            echo "<p>SIM</p>";
                        }
                        echo "<hr>";

                        echo "<h5>O texto informado tem:</h5>";
                        echo "<p>" . strlen($texto) . "</p>";

                        $arquivo = 'anotacao.txt';
                        $conteudo = array('Texto:', $texto, 'Hoje é dia ' . $data[0] . ' e agora são ' . $data[1], '-----------------------------------------------------');
                        $documento = fopen($arquivo, 'a+');

                        fwrite($documento, $conteudo[0]);
                        fwrite($documento, "\n");
                        fwrite($documento, "\n");
                        fwrite($documento, $conteudo[1]);
                        fwrite($documento, "\n");
                        fwrite($documento, "\n");
                        fwrite($documento, $conteudo[2]);
                        fwrite($documento, "\n");
                        fwrite($documento, "\n");
                        fwrite($documento, $conteudo[3]);
                        fwrite($documento, "\n");
                        fwrite($documento, "\n");


                        fclose($documento);
                    }

                    ?>
                </div>

            </div>



            </form>

        </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>