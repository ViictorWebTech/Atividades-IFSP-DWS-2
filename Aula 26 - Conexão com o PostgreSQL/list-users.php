<?php

session_start();

require "logica-autenticacao.php";

$page_title = "Listagem de Usuários";

require 'header.php';

require 'conexao.php';

$sql = "SELECT id, nome, email FROM usuarios ORDER BY id";
$stmt = $conn->query($sql);



?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead class="table-success">
            <tr>
                <th scope="col" style="width: 10%;">ID</th>
                <th scope="col" style="width: 25%;">Nome</th>
                <th scope="col" style="width: 15%;">Email</th>
                <?php
                if (autenticado()) {
                ?>
                    <th scope="col" style="width: 25%;" colspan="2"></th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stmt->fetch()) {



            ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["nome"] ?></td>
                    <td>
                        <?= $row["email"] ?>

                    </td>
                    <?php
                    if (autenticado()) {
                    ?>
                        <td>
                            <a class="btn btn-sm btn-danger" href="delet-user.php?id=<?= $row["id"] ?>" onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                                <span data-feather="trash-2"></span>
                                Excluir
                            </a>
                        </td>
                    <?php
                    }
                    ?>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
require 'footer.php';

?>