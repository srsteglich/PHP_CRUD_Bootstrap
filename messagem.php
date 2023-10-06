<?php
if (isset($_SESSION['message'])) :
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Opa...</strong> <?= $_SESSION['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php
    unset($_SESSION['message']);
endif;
?>

<script>
    /* Não funciona no PHP */
    /*  $(document).ready(function() {
            setTimeout(function() {
                $(".alert").fadeOut("slow", function() {
                    $(this).alert('close');
                });
            }, 5000);
        });  */
</script>