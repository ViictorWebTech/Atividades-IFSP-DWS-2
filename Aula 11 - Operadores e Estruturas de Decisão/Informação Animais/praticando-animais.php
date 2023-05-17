<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Animais
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        header {
            margin-top: .5em;
        }

        .conteudo-principal {
            display: flex;
        }

        .img {
            max-width: 16em;
            max-height: 10em;
            margin-right: .5em;
            margin-top: .5em;
            cursor: pointer;
        }

        .click{
            max-width: 30em;
        }
    </style>

</head>

<body>
    <div class="container">
        <header>
            <div>
                <h1>Praticando - Animais</h1>
                <hr>
            </div>
        </header>

        
        <?php
        if (isset($_GET['animal'])) {
            $animal = filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);

            if ($animal == "gato") {
                echo "<p>Você clicou no <strong>Gato</strong>.</p>";
                echo "<p>Em média um gato passa 2/3 do dia a dormir. Isso significa que em 9 anos de vida, apenas está acordado 3 anos.</p>";
                echo '<img class="click" id="gato" src="gato.jpg" alt="Imagem de um gato">';
                echo "<br> <br>";
                echo '<a href="praticando-animais.php">Voltar</a>';
            } elseif ($animal == "cachorro") {
                echo "<p>Você clicou no <strong>Cachorro</strong>.</p>";
                echo "<p>O nariz de cada cachorro é único, assim como nossa impressão digital.</p>";
                echo '<img class="click" id="cachorro" src="cachorro.jpg" alt="Imagem de um cachorro">';
                echo "<br> <br>";
                echo '<a href="praticando-animais.php">Voltar</a>';
            } elseif ($animal == "hamster") {
                echo "<p>Você clicou no <strong>Hamster</strong>.</p>";
                echo "<p>Hamsters aprendem seu próprio nome.</p>";
                echo '<img class="click" id="hamster" src="hamster.jpg" alt="Imagem de um hamster">';
                echo "<br> <br>";
                echo '<a href="praticando-animais.php">Voltar</a>';
            } elseif ($animal == "lagartixa") {
                echo "<p>Você clicou na <strong>Lagartixa</strong>.</p>";
                echo "<p>Se se sentem em perigo, deixam a cauda para trás para enganar o predador. Depois a cauda cresce novamente.</p>";
                echo '<img class="click" id="lagartixa" src="lagartixa.jpg" alt="Imagem de uma lagartixa">';
                echo "<br> <br>";
                echo '<a href="praticando-animais.php">Voltar</a>';
            } 
        }
        if (empty($_GET['animal'])) {
            echo "<main>";
            echo "<section class='conteudo-principal'>";
            echo "<div>";
            echo "<a href='?animal=gato'><img src='gato.jpg' class='img' alt='Imagem de um gato'></a>";
            echo "<a href='?animal=cachorro'><img src='cachorro.jpg' class='img' alt='Imagem de um cachorro'></a>";
            echo "<a href='?animal=hamster'><img src='hamster.jpg' class='img' alt='Imagem de um Hamster'></a>";
            echo "<a href='?animal=lagartixa'><img src='lagartixa.jpg' class='img' alt='Imagem de uma lagartixa'></a>";
            echo "</div>";
            echo "</section>";
            echo "</main>";
        }
        ?>



    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>