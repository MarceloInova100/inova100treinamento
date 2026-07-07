<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/** Gestor Routes */
$routes->group('gestor', function($routes){
    $routes->get('/', 'Gestor::index');
    $routes->get('novo', 'Gestor::novo');
    $routes->post('salvar', 'Gestor::salvar');
    $routes->get('editar/(:num)', 'Gestor::editar/$1');
});

/** Participante Routes */
$routes->get('/participante', 'ParticipanteController::index');

/** Presenca Routes */
$routes->get('/presenca', 'PresencaController::index');

$routes->get('dashboard', 'Dashboard::index');
