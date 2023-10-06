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
                    <h4>Consulta do Aluno
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

                    ?>
                            <div class="mb-3">
                                <label>Nome do Aluno</label>
                                <p class="form-control">
                                    <?= $aluno['nome']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>E-mail do Aluno</label>
                                <p class="form-control">
                                    <?= $aluno['email']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Celular do Aluno</label>
                                <p class="form-control">
                                    <?= $aluno['telefone']; ?>
                                </p>
                            </div>
                            <div class="mb-3">
                                <label>Curso do Aluno</label>
                                <p class="form-control">
                                    <?= $aluno['curso']; ?>
                                </p>
                            </div>
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