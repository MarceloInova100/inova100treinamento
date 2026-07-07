<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/** Gestor Routes */
$routes->get('/gestor', 'GestorController::index');

/** Participante Routes */
$routes->get('/participante', 'ParticipanteController::index');

/** Presenca Routes */
$routes->get('/presenca', 'PresencaController::index');
