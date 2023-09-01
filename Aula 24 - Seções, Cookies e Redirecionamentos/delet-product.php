<?php

$page_title = "Página de exclusão de produtos";
require 'header.php';

require 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

echo "<p><b>ID:</b> $id</p>";

/**
 * DELETE FROM `produtos` WHERE 0'
 */
$sql = "DELETE FROM produtos WHERE id = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$id]);

/*
PDOStatement::rowCount

Returns the number of rows affected by the last SQL statement

https://www.php.net/manual/en/pdostatement.rowcount.php
*/

$count = $stmt->rowCount();

if ($result == true && $count >= 1) {
    //deu cert{o o insert
?>
    <div class="alert alert-success" role="alert">
        <h4>Registro excluído com sucesso.</h4>
    </div>

<?php
} elseif($count == 0){
    ?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar exclusão.</h4>
        <p>Não foi encontrado nenhum registro com o ID = <?= $id; ?>.</p>
    </div>

    <?php

} else {
    //não deu certo, erro
    $errorArray = $stmt->errorInfo();
?>

    <div class="alert alert-danger" role="alert">
        <h4>Falha ao efetuar exclusão.</h4>
        <p><?= $errorArray[2]; ?></p>
    </div> 

<?php

}

require 'footer.php';

?>