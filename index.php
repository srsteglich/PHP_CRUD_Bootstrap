<?php
session_start();
require 'conexao.php';

include('includes/header.php');
?>

<div class="container mt-5">
    <?php
    include('messagem.php');
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Detalhes do Aluno
                        <a href="aluno-create.php" class="btn btn-primary float-end">Adicionar alunos</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Curso</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM alunos ORDER BY nome ASC";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run)  > 0) {
                                foreach ($query_run as $aluno) {
                            ?>
                                    <tr>
                                        <td><?= $aluno['id'];   ?></td>
                                        <td><?= $aluno['nome'];   ?></td>
                                        <td><?= $aluno['email'];   ?></td>
                                        <td><?= $aluno['telefone'];   ?></td>
                                        <td><?= $aluno['curso'];   ?></td>

                                        <td>
                                            <a href="aluno-view.php?id=<?= $aluno['id']; ?> " class="btn btn-info btn-sm">Consultar</a>
                                            <a href="aluno-edit.php?id=<?= $aluno['id']; ?> " class="btn btn-success btn-sm">Alterar</a>
                                            <form action="lidar.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete-aluno" value="<?= $aluno['id']; ?>" class="btn btn-danger btn-sm">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                print "<h5>Nenhum Registro Encontrado </h5>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>