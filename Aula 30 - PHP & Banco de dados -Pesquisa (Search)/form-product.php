<?php

session_start();

require "logica-autenticacao.php";

$page_title = "Formulário de cadastro de produtos";

if(!autenticado()){
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

require 'header.php';

    ?>
    <script>
    function imagePreview(valor) {
        var img = document.getElementById('image-preview');
        if (valor) {
            img.setAttribute('src', valor);
            img.style.display = 'inline';
        } else {
            img.style.display = 'none';
        }
    }
</script>
<form action="insert-product.php" method="post">
    <div class="row">
        <div class="col-8">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="urlfoto" class="form-label">URL de uma foto/imagem do produto</label>
                <input type="url" class="form-control" id="urlfoto" name="urlfoto" aria-describedby="urlfotoHelp" required onchange="imagePreview(this.value)">
                <div id="urlfotoHelp" class="form-text">Endereço http de uma imagem da internet</div>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição detalhada do produto</label>
                <textarea class="form-control" name="descricao" id="descricao"></textarea>
            </div>
             
            <button type="submit" class="btn btn-primary">Gravar</button>
            <button type="reset" class="btn btn-warning">Cancelar</button>
        </div>
        <div class="col-3">
            <img src="" alt="" class="img-thumbnail" id="image-preview" style="display: none;">
        </div>
    </div>

</form>

<?php


require 'footer.php';

?>