<?php

use Resources\Objects\Controllers\AdminController;
use Resources\Objects\Services\ServerInformation;

$query = new AdminController;
$query = $query->getRoutes();
$result = $query;

$method = new ServerInformation;
$method = $method->getMethod();

if ($method == "POST") {
    $insert = new AdminController;
    @$result = $insert->createRoute(
        $_POST['title'],
        $_POST['uri'],
        $_POST['params'],
        $_POST['file'],
        $_POST['read']
    );

    $json = json_decode($result);
}


?>

<?php include "snippets/head.php"; ?>
<?php include "snippets/navbar.php"; ?>

<div class="container-fluid">
    <div class="row">

    <?php if(isset($json->status)){?>
        <div class="col-sm-12 card-box">
            <div class="card">
                <div class="alert alert-<?= $json->class ?>" role="alert">
                    <?= $json->returnMessage ?>
                </div>
            </div>
        </div>
    <?php } ?>

        <div class="col-sm-12 card-box">
            <div class="card">
                <form action="/admin/rotas/criar" method="POST">
                    <label for="title">Título da Página</label>
                    <input type="text" class="form-control mb-3" name="title" placeholder="Título">

                    <label for="uri">URI - URL após o domínio</label>
                    <input type="text" class="form-control mb-3" name="uri" placeholder="/admin/example">

                    <label for="file">Arquivo (Base: views/)</label>
                    <input type="text" class="form-control mb-5" name="file" placeholder="/admin/example.php">

                    <label for="params">Recebe parâmetros?</label>
                    <select class="form-select mb-5" name="params">
                        <option selected disabled>Selecione..</option>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>

                    <label>Pode ser mostrada no gerenciador de rotas?</label><br>
                    <input type="radio" class="form-check-input gx-5" name="read" value="1">
                    <label>Sim</label><br>
                    <input type="radio" class="form-check-input mb-5" name="read" value="0">
                    <label>Não</label><br>

                    <button type="submit" class="btn btn-success w-5">
                        <span class="material-symbols-outlined grid-center">
                            add
                        </span>
                    </button>
                </form>
            </div>
        </div>

        <div class="col-sm-12">
            <a class="action-link" href="/admin/rotas">
                <span class="material-symbols-outlined grid-center">
                    undo
                </span>
            </a>
        </div>
    </div>
</div>

<?php include "snippets/footer.php"; ?>