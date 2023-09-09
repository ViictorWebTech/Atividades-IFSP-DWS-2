<?php

session_start();

require "logica-autenticacao.php";

$page_title = "Início";

require 'header.php';

?>

<p class="display-4">
    Seja bem vindo a aplicação <strong>"Lojinha"</strong>.
</p>
<p class="display-4">
    Esta é a página inicial.
</p>
<hr>

<?php

if (isset($_SESSION["restrito"]) && $_SESSION["restrito"]) {
?>
    <div class="alert alert-danger" role="alert">
        <h4>Esta é uma página PROTEGIDA!</h4>
        <p>Você está tentando acessar conteúdo restrito.</p>
    </div>
<?php
    unset($_SESSION["restrito"]);
}

require 'conexao.php';

require 'footer.php';

?>