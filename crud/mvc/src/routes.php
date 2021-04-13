<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

$router->get('/adicionar', 'UsuarioController@adicionar');
$router->post('/adicionar', 'UsuarioController@adicionarAction');

$router->get('/usuario/{id}/editar', 'UsuarioController@editar');
$router->post('/usuario/{id}/editar', 'UsuarioController@editarAction');

$router->get('/usuario/{id}/excluir', 'UsuarioController@excluir');