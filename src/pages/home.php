<?php
$title = 'Página inicial';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php require __DIR__.'/shared/_head.php'; ?>
    <body> 
        <?php require __DIR__.'/shared/_nav.php'; ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Olá, mundo!</h1>
                <p class="lead">Este é um simples componente jumbotron para chamar mais atenção a um determinado conteúdo ou informação.</p>
                <hr class="my-4">
                <p>Ele usa classes utilitárias para tipografia e espaçamento de conteúdo, dentro do maior container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Leia mais</a>
            </div>
        </div>
        <div class="container">
            <section>
                <h3>Destaques</h3>
            </section>
        </div>
    </body>
</html>