<?php

$page_title = "";
require 'header.php';

?>

<div class="row">
    <div class="col-4 offset-4">
        <br><br>
        <form action="login.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Por favor identifique-se</h1>

            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Endereço de e-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Senha" required>
                <label for="floatingPassword">Senha</label>
            </div>


            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>

        </form>
    </div>
</div>




<?php

require 'footer.php';

?>