<?php

$page_title = "Formulário de alteração de produtos";
require 'header.php';


$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if(empty($id)){

    ?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao abrir formulário para edição.</h4>
        <p>ID do produto está vazio.</p>
    </div>

<?php
    exit;
}

require 'conexao.php';

$sql = "SELECT nome, urlfoto, descricao FROM produtos WHERE id = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$id]);

$rowProduto = $stmt->fetch();

?>

<form action="edit-product.php" method="post">
    <input type="hidden" name="id" id="id" value="<?=$id;?>">
    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required value="<?=$rowProduto['nome'];?>">
            </div>
            <div class="mb-3">
                <label for="urlfoto" class="form-label">URL de uma foto/imagem do produto</label>
                <input type="url" class="form-control" id="urlfoto" name="urlfoto" aria-describedby="urlfotoHelp" required value="<?=$rowProduto['urlfoto'];?>">
                <div id="urlfotoHelp" class="form-text">Endereço http de uma imagem da internet</div>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição detalhada do produto</label>
                <textarea class="form-control" name="descricao" id="descricao"><?=$rowProduto['descricao'];?></textarea>
            </div>
             
            <button type="submit" class="btn btn-primary">Gravar</button>
            <button type="reset" class="btn btn-warning">Cancelar</button>
        </div>
        <div class="col-3">
            <img src="<?=$rowProduto['urlfoto']?>" alt="<?=$rowProduto['nome']?>" class="img-thumbnail" id="image-preview">
        </div>
    </div>

</form>

<?php

require 'footer.php';

?>