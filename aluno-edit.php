<?php
session_start();
require 'conexao.php';

include('includes/header.php');
?>

<div class="container mt-5">
    <?php include('messagem.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Alteração do Aluno
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?php
                    if (isset($_GET['id'])) {
                        $aluno_id = mysqli_real_escape_string($conn, $_GET['id']);
                        $query = "SELECT * FROM alunos WHERE id='$aluno_id' ";
                        $query_run = mysqli_query($conn, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            $aluno = mysqli_fetch_array($query_run);
                            //print_r($aluno);
                    ?>
                            <form action="lidar.php" method="POST">
                                <input type="hidden" name="aluno_id" value="<?= $aluno['id']; ?>">
                                <div class="mb-3">
                                    <label>Nome do Aluno</label>
                                    <input type="text" name="nome" value="<?= $aluno['nome']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>E-mail do Aluno</label>
                                    <input type="email" name="email" value="<?= $aluno['email']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Celular do Aluno</label>
                                    <input type="text" name="telefone" value="<?= $aluno['telefone']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Curso do Aluno</label>
                                    <input type="text" name="curso" value="<?= $aluno['curso']; ?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="altera_aluno" class="btn btn-primary">Altera</button>
                                </div>
                            </form>
                    <?php
                        } else {
                            print "<h4>Nenhum ID encontrado </h4>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>