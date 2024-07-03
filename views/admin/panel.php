<?php include "snippets/head.php"; ?>
<?php include "snippets/navbar.php"; ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-4 card-box">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 card-hd">
                            <span class="card-icon material-symbols-outlined">
                                manage_accounts
                            </span>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <h5>Gestão de Usuários</h5>
                        </div>
                    </div>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Gerencie usuários e defina seus níveis de acesso</h6>
                </div>
                <a href="#" class="card-link"><button type="button" class="btn btn-primary card-button">Gerir</button></a>
            </div>
        </div>

        <div class="col-sm-4 card-box">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 card-hd">
                            <span class="card-icon material-symbols-outlined">
                                http
                            </span>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <h5>Gestão de Rotas</h5>
                        </div>
                    </div>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Gerencie Rotas (urls) do Sistema</h6>
                </div>
                <a href="/admin/rotas" class="card-link"><button type="button" class="btn btn-primary card-button">Gerir</button></a>
            </div>
        </div>


    </div>
</div>

<?php include "snippets/footer.php"; ?>