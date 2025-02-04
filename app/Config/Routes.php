<?php

use App\Controllers\MahasiswaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', [MahasiswaController::class, "index"]);
$routes->get('/mahasiswa/detail/(:num)', [MahasiswaController::class, "detail"]);
$routes->get('/mahasiswa/create', [MahasiswaController::class, "goCreate"]);
$routes->post('/mahasiswa/add', [MahasiswaController::class, "create"]);
$routes->delete('/mahasiswa/delete/(:num)', [MahasiswaController::class, "delete"]);
$routes->get('/mahasiswa/update/(:num)', [MahasiswaController::class, "goUpdate"]);
$routes->post('/mahasiswa/update', [MahasiswaController::class, "update"]);
