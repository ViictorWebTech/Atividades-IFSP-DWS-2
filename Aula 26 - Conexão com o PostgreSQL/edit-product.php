<?php

session_start();

require "logica-autenticacao.php";

$page_title = "Página de alteração de produtos";
require 'header.php';

require 'conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$urlfoto = filter_input(INPUT_POST, 'urlfoto', FILTER_SANITIZE_URL);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);


echo "<p><b>ID:</b> $id</p>";
echo "<p><b>Nome:</b> $nome</p>";
echo "<p><b>URL Foto:</b> $urlfoto</p>";
echo "<p><b>Descrição:</b> $descricao</p>";

/**
 * UPDATE `produtos` SET `id`='[value-1]',`nome`='[value-2]',`urlfoto`='[value-3]',`descricao`='[value-4]' WHERE 1
 */
$sql = "UPDATE produtos SET nome = ?, urlfoto = ?, descricao = ? WHERE id = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $urlfoto, $descricao, $id]);
$count = $stmt->rowCount();

if ($result == true && $count >= 1) {
    //deu cert{o o insert
?>
    <div class="alert alert-success" role="alert">
        <h4>Dados alterados com sucesso.</h4>
    </div>

<?php
}elseif($result == true && $count == 0){
    ?>
    <div class="alert alert-secondary" role="alert">
        <h4>Nenhum dado foi alterado.</h4>
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