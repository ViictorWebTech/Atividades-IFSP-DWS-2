<?php
$page_title = "Listagem de Produtos";
require 'header.php';

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-success">
            <tr>
                <th scope="col" style="width: 10%;">ID</th>
                <th scope="col" style="width: 25%;">Nome</th>
                <th scope="col" style="width: 15%;">Imagem</th>
                <th scope="col" style="width: 25%;">Descriçãp</th>
                <th scope="col" style="width: 25%;" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Camiseta Camisa Bart Simpsons Spray Vermelho</td>
                <td>
                    <a href="https://http2.mlstatic.com/D_NQ_NP_2X_946846-MLB52232497750_112022-F.webp" target="_blank">
                        Link imagem
                    </a>
                </td>
                <td>Camiseta Anime Simpsons Casual. Alta qualidade, não desbota e não deforma. Costura industrial reforçada para uma ótima durabilidade do produto.</td>
                <td>
                <a class="btn btn-sm btn-warning" href="#">
                    <span data-feather="edit"></span>
                    Editar
                </a>
                </td>
                <td>
                <a class="btn btn-sm btn-danger" href="#">
                    <span data-feather="trash-2"></span>
                    Excluir
                </a>
                </td>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>
                    <a href="" target="_blank">
                        -
                    </a>
                </td>
                <td>-</td>
                <td>
                <a class="btn btn-sm btn-warning" href="#">
                    <span data-feather="edit"></span>
                    Editar
                </a>
                </td>
                <td>
                <a class="btn btn-sm btn-danger" href="#">
                    <span data-feather="trash-2"></span>
                    Excluir
                </a>
                </td>
            </tr>
            <tr>
                <td>-</td>
                <td>-</td>
                <td>
                    <a href="" target="_blank">
                        -
                    </a>
                </td>
                <td>-</td>
                <td>
                <a class="btn btn-sm btn-warning" href="#">
                    <span data-feather="edit"></span>
                    Editar
                </a>
                </td>
                <td>
                <a class="btn btn-sm btn-danger" href="#">
                    <span data-feather="trash-2"></span>
                    Excluir
                </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php

require 'footer.php';

?>