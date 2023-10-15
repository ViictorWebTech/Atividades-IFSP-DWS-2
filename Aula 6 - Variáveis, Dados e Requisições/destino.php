<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino</title>
</head>

<body>
    <h1>Destino</h1>
    <hr>
    <?php
    print_r($_POST);


    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $cor = filter_input(INPUT_POST, "cor", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome</p>";
    echo "<p>E o email foi: $email</p>"
    ?>

    <style>
        body {
            background-color: <?php echo $cor; ?>
        }
    </style>
</body>

</html>