<?php
session_start();

include('includes/header.php');
?>

<div class="container mt-5">
    <?php include('messagem.php');  ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar do Aluno
                        <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="lidar.php" method="POST">
                        <div class="mb-3">
                            <label>Nome do Aluno</label>
                            <input type=" text" name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>E-mail do Aluno</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Celular do Aluno</label>
                            <input type="text" name="telefone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Curso do Aluno</label>
                            <input type="text" name="curso" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="salva_aluno" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>