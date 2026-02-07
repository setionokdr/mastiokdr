<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'PermohonanController::index');
$routes->get('/permohonan', 'PermohonanController::index');
$routes->get('/permohonan/baru', 'PermohonanController::create');
$routes->post('/permohonan', 'PermohonanController::store');
$routes->get('/permohonan/(:num)', 'PermohonanController::show/$1');
