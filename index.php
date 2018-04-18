<?php    
    //headers
        header('Access-Control-Allow-Origin: *'); 
        header("Content-type:text/html; charset=utf-8");
        require_once('./vendor/autoload.php');
    //headers

    //classes importadas
        use app\server\controllers\Router;
        use app\server\models\Animal;
    //classes importadas

    //comentar quando estiver em produção
    Router::dev();
    
    // NOME DA PASTA DO PROJETO | CASO ESTIVER NA RAIZ DO SERVER, NÃO DEFINIR O MÉTODO.
    Router::dirRoot("anjosderua");


    //TEMPLATE Principal
        Router::get('/', function() {
            Router::View("./app/client/index.html");
        });
    //TEMPLATE Principal
    
    //End Points Animais
        Router::get('/animais', function() {
            
        });
        Router::get('/animais/{id}', function($params) {

        });
        Router::post('/animais', function($dados) {
            
        });
        Router::put('/animais/{id}', function($dados) {
            
        });
        Router::delete('/animais/{id}', function($params) {
            
        });
    //End Points Animais

    //End Points Associados
        Router::get('/associados', function() {

        });
        Router::get('/associados/{id}', function($params) {
            
        });
        Router::post('/associados', function($dados) {
            
        });
        Router::put('/associados/{id}', function($dados) {
            
        });
        Router::delete('/associados/{id}', function($params) {
            
        });
    //End Points Associados

    //End Point para Login
        Router::post('/authentication', function($dados) {
           
            
        });
    //End Point para Login

    //ERROR 404
        Router::notFound("./app/client/notFound.html");
    //ERROR 404