<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/products','ProductController::fetchProducts');
$routes->get('/add-product', 'ProductController::addProduct');
///Post product data to DB
$routes->post('/product-store', 'ProductController::productPost');
$routes->get('product/delete/(:num)','ProductController::deleteProduct/$1');
$routes->delete('product/delete-meth/(:num)','ProductController::deleteMeth/$1');
$routes->get('product/confirm-del/(:num)','ProductController::confirmDel/$1');

$routes->get('/students','StudentController::fetchData');
$routes->get('/create','StudentController::createData');
$routes->get('site/create','StudentController::createData');
$routes->post('site/post','StudentController::postData');
$routes->get('site/edit/(:num)','StudentController::editData/$1');
$routes->put('site/update/(:num)', 'StudentController::updateData/$1');
$routes->get('site/delete/(:num)','StudentController::deleteData/$1');
$routes->delete('site/delete-method/(:num)', 'StudentController::delete/$1');
$routes->get('site/confirm-delete/(:num)','StudentController::confirmDelete/$1');

//Grouping Routes
$routes->group('users', static function ($routes) {
    $routes->get("profile", function (){
        return "Iam user profile";
    });
    $routes->get("order",function (){
        return "Iam user order";
    });
    // $routes->get('profile', 'ProductController::profile');
    // $routes->get('order', 'ProductController::order');
});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}