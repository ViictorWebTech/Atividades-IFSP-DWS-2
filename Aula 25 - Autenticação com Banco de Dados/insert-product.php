<?php

session_start();

require "logica-autenticacao.php";
$page_title = "Página de inserção de produtos";
require 'header.php';

require 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$urlfoto = filter_input(INPUT_POST, 'urlfoto', FILTER_SANITIZE_URL);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p><b>Nome:</b> $nome</p>";
echo "<p><b>URL Foto:</b> $urlfoto</p>";
echo "<p><b>Descrição:</b> $descricao</p>";

/**
 * INSERT INTO `produtos`(`id`, `nome`, `urlfoto`, `descricao`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4])'
 */
$sql = "INSERT INTO `produtos`(`nome`, `urlfoto`, `descricao`) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $urlfoto, $descricao]);

if ($result == true) {
    //deu cert{o o insert
?>
    <div class="alert alert-success" role="alert">
        <h4>Dados gravados com sucesso.</h4>
    </div>

<?php
} else {
    //não deu certo, erro
    $errorArray = $stmt->errorInfo();
?>

    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar gravação.</h4>
        <p><?= $errorArray[2]; ?></p>
    </div> 

<?php

}

require 'footer.php';

?>