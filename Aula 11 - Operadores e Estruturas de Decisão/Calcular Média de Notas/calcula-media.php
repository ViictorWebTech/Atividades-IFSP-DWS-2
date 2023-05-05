<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Notas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        header {
            margin-top: .5em;
        }

        .form-control {
            max-width: 5em;
            display: inline;
        }
    </style>
</head>

<body>
    <div class="container-sm">
        <header>
            <h1>Praticando - Calculadora Média</h1>
            <hr>
        </header>


        <form action="calculadora.php" method="POST">

            <div class="mb-3">
                <label for="nota1" class="form-label">Nota 1: </label>
                <input type="number" class="form-control" name="nota1" min="0" step="0.5" max="10" required>
            </div>

            <div class="mb-3">
                <label for="nota2" class="form-label">Nota 2: </label>
                <input type="number" class="form-control" name="nota2" min="0" step="0.5" max="10" required>
            </div>

            <div class="mb-3">
                <label for="nota3" class="form-label">Nota 3: </label>
                <input type="number" class="form-control" name="nota3" min="0" step="0.5" max="10" required>
            </div>

            <button type="submit" class="btn btn-success">Calcular Média</button>
            <button type="reset" class="btn btn-warning">Limpar</button>


        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>