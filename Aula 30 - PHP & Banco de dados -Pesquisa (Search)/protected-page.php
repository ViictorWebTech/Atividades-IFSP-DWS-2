<?php

session_start();

require "logica-autenticacao.php";

$page_title = "Página Protegida";

if(!autenticado()){
    $_SESSION["restrito"] = true;
    redireciona();
    die();
}

require 'header.php';


?>

    <p class="display-5">
        Olá <b><?= nome_usuario(); ?></b>, seja bem vindo(a).
    </p>

    <div class="text-center">
        <p class="display-4 fw-bold">
            Aula de sessões
        </p>
        <p class="display-4">
            Esta é uma página <span class="bg-danger text-warning">PROTEGIDA</span>
        </p>
        <p class="display-4">
            só deve ser possível acessá-la
        </p>
        <p class="display-4">
            <span class="bg-warning">após ter se autenticado (feito login).</span>
        </p>
    </div>

<?php



require 'footer.php';

?>