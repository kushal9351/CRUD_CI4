<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/students', 'StudentController::index');
$routes->get('/students/create', 'StudentController::create');
$routes->post('/students/add', 'StudentController::add');
$routes->get('/students/edit/(:num)', 'StudentController::edit/$1');
$routes->post('/students/update/(:num)', 'StudentController::update/$1');
$routes->get('/students/delete/(:num)', 'StudentController::delete/$1');
// $routes->get('product/(:num)', 'Catalog::productLookupByID/$1');

$routes->get('/', 'Home::index');
$routes->get('/Products', 'ProductController::index');
// $routes->get('/Products/demo', 'ProductController::demo');
$routes->get('/Products/(:any)', 'ProductController::find/$1');



$routes->group('user', static function ($routes) {

    $routes->get('profile', function (){
        echo "this is profile route";
    });
    $routes->get('orders', function (){
        echo "this is orders route";
    });

    // $routes->get('profile', 'ProductController::profile');
    // $routes->get('orders', 'ProductController::orders');
});

