<?php
$title = 'Lista de chamados';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php require __DIR__.'/shared/_head.php'; ?>
    <body> 
        <?php require __DIR__.'/shared/_nav.php'; ?>
        <div class="container">
            <h1 class="mb-4">Lista de chamados</h1>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="#" title="Ver datalhes">Cras alemanha odio</a>
                    <span class="badge badge-danger badge-pill">Urgente</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-warning badge-pill">Prioritario</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi brasil risus
                    <span class="badge badge-info badge-pill">Novo</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lorem ipsum dolor
                    <span class="badge badge-info badge-pill">Novo</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Lorem ipsum dolor sit
                    <span class="badge badge-info badge-pill">Novo</span>
                </li>
                <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center">
                    Lorem ipsum
                    <span class="badge badge-light badge-pill">Encerrado</span>
                </li>
            </ul>
        </div>
    </body>
</html>