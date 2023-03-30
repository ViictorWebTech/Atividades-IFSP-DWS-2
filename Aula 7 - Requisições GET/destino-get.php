<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino GET</title>

</head>

<body>
    <h1>Destino GET</h1>
    <hr>

    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);


    echo "<p>Nome informado: $nome</p>";
    echo "<p>Email: $email</p>"
    ?>

    <a href="destino-get.php?nome=Eder&email=epansani@gmail.com&cor=<?= $cor ?>">[nome=Eder&email=epansani@gmail.com]</a>
    <br>
    <a href="destino-get.php?nome=José da Silva&email=jose1987@outlook.com&cor=<?= $cor ?>e">[nome=José da Silva&email=jose1987@outlook.com]</a>

    <br>
    <a href="destino-get.php">Limpar</a>



    <div class="div">
        <a href="destino-get.php?cor=red&nome=<?= $nome; ?>&email=<?= $email; ?>"> <img src="https://th.bing.com/th/id/OIP.gY1XSwyhPyPLc7RWKulU_AAAAA?pid=ImgDet&rs=1" alt="imagem vermelha"></a>



        <a href="destino-get.php?cor=green&nome=<?= $nome; ?>&email=<?= $email; ?>"> <img src="https://th.bing.com/th/id/R.10aa6f886e7e9f3a5aebd9f5e6fb9c65?rik=PelaQ9vaxHXmUQ&pid=ImgRaw&r=0" alt="imagem verde"></a>

        <a href="destino-get.php?cor=blue&nome=<?= $nome; ?>&email=<?= $email; ?>"><img src="https://th.bing.com/th/id/OIP.0aNcFUVO3Ri11_9AZrsfeQHaEu?pid=ImgDet&rs=1" alt="imagem azul"></a>

    </div>
    <style>
        .div {
            display: flex;
            width: 100;
        }

        img {
            width: 150px;
            height: 100px;
            border: 3px solid black;
            margin: 5vw;
        }


        body {
            background-color: <?php echo $cor; ?>;
        }
    </style>
</body>

</html>