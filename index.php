<?php
/** 
 * Entry point da aplicação
*/

// Hasmap para associar uma url a uma página
$ROUTES = [
    '/' => __DIR__.'/src/pages/home.php',
    '/chamados' => __DIR__.'/src/pages/chamados.php'
];

// Pega o caminho requisitado
// e.g. http://localhost/admin 
// $path será igual a '/admin'
$path = $_SERVER['REQUEST_URI'];

// Verifica se o hashmap possui alguma entrada
// para a url informada
if(isset($ROUTES[$path])) {
    require $ROUTES[$path]; // exibe a página
} else {
    // para urls não defiidas no mapa
    // exibir a página de erro 404
    require __DIR__.'/src/pages/404.html'; 
}