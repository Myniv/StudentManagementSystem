<?php

use App\Controllers\MahasiswaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', [MahasiswaController::class, "index"]);
$routes->get('/mahasiswa/detail/(:num)', [MahasiswaController::class, "detail"]);
