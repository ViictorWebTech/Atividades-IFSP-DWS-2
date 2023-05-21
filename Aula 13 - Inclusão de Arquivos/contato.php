<?php

require 'header.php'

?>

<div class="main">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário Para Contato</h1>
        </div>
        <form method="POST">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome: </label>
                        <input type="text" class="form-control" name="nome" title="nome" placeholder="Digite seu nome" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: </label>
                        <input type="email" class="form-control" name="email" title="email" placeholder="Digite seu email" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem: </label>
                        <textarea rows="3" class="form-control" name="mensagem" title="mensagem" required> </textarea>
                    </div>
                </div>
                
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </div>

<?php

require 'footer.php';

?>