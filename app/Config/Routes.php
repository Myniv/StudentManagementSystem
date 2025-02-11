<?php

use App\Controllers\Home;
use App\Controllers\MahasiswaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//-----------------------------------------------------------------//
//IF USING AUTO ROUTE, ALL THE ROUTES MUST BE GONE IN HERE
//-----------------------------------------------------------------//

$routes->get('/', [Home::class, 'index']);
$routes->group('test', function ($routes) {
    $routes->get('routing/alpha/(:alpha)', [Home::class, 'alphaMethod']);
    $routes->get('routing/num/(:num)', [Home::class, 'numMethod']);
    $routes->get('routing/(:num)/(:alpha)', [Home::class, 'numAndAlphaMethod/$1/$2']);
    $routes->get('routing/(:alphanum)', [Home::class, 'alphaNumMethod']);
    $routes->get('routing/(:segment)', [Home::class, 'segmentMethod']);
    $routes->get('routing/(:any)', [Home::class, 'anyMethod']);
});
$routes->get('/user/profile', [Home::class, 'profile', ['as' => 'profile']]);
$routes->addRedirect('user/about', 'profile');

$routes->get('/mahasiswa', [MahasiswaController::class, "index"]);
$routes->get('/mahasiswa/detail/(:num)', [MahasiswaController::class, "detail"]);
// $routes->get('/mahasiswa/create', [MahasiswaController::class, "goCreate"]);
// $routes->post('/mahasiswa/create', [MahasiswaController::class, "create"]);
$routes->match(['get', 'post'], '/mahasiswa/create', [MahasiswaController::class, "create"]);
$routes->delete('/mahasiswa/delete/(:num)', [MahasiswaController::class, "delete"]);
$routes->get('/mahasiswa/update/(:num)', [MahasiswaController::class, "goUpdate"]);
$routes->put('/mahasiswa/update', [MahasiswaController::class, "update"]);



$routes->get('/testhelper', [Home::class, "helperTutorial"]);

//Menggunakan controller tanpa menyebutkan controller secara explisit
$routes->resource("photos");

// $routes->set404Override(static function () {
//     return view("error_404");
// });

// Dengan tambahan options
// $routes->resource('products', [

//     'controller' => 'ProductController', // Menggunakan controller tertentu secara explisit

//     'except' => ['delete'], // Mengecualikan method tertentu

//     'only' => ['index', 'show'] // Hanya menggunakan method tertentu

// ]);