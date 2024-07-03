<?php

use Resources\Objects\Controllers\AdminController;

$query = new AdminController;
$query = $query->getRoutes();
$result = $query;
?>

<?php include "snippets/head.php"; ?>
<?php include "snippets/navbar.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 card-box">

            <div class="card">
                <a href="/admin/rotas/criar">
                    <button class="btn btn-success w-5">
                        <span class="material-symbols-outlined grid-center">
                            new_window
                        </span>
                    </button>
                </a>
                <br>
                <table id="table" class="table table-dark">
                    <thead>
                        <tr>
                            <th>Uri</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $route) { 
                            if($route['read'] == 1){    
                        ?>
                            <tr>
                                <td><?= $route['uri'] ?></td>
                                <td>
                                    <a class="btn btn-primary mb-3" href="<?php echo '/admin/rotas/editar/'.$route['id']; ?>">Editar</a>
                                    <a class="btn btn-danger mb-3" href="<?php echo '/admin/rotas/excluir/'.$route['id']; ?>">Excluir</a>
                                </td>
                            </tr>
                        <?php }} ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

<?php include "snippets/footer.php"; ?>

<script>
    let dataTable = new dataTable('#table', {
        responsive: true,
        paging: true,
    });
</script>