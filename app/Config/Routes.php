<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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


// Composer routes
$routes->get('Composer', 'Composer::index', ['filter' => 'role:Admin']);
$routes->post('/Create_data_composer', 'Composer::Create_data_composer', ['filter' => 'role:Admin']);
$routes->get('/Composer/Detail/(:segment)', 'Composer::Detail_data_composer/$1', ['filter' => 'role:Admin']);
$routes->post('/Update_data_composer/(:segment)', 'Composer::Update_data_composer/$1', ['filter' => 'role:Admin']);
$routes->get('/Composer/Delete/(:segment)', 'Composer::Delete_data_composer/$1', ['filter' => 'role:Admin']);

// Publishing routes
$routes->get('Publishing', 'Publishing::index', ['filter' => 'role:Admin']);
$routes->post('/Create_data_publishing', 'Publishing::Create_data_publishing', ['filter' => 'role:Admin']);
$routes->get('/Publishing/Detail/(:segment)', 'Publishing::Detail_data_publishing/$1', ['filter' => 'role:Admin']);
$routes->post('/Update_data_publishing/(:segment)', 'Publishing::Update_data_publishing/$1', ['filter' => 'role:Admin']);
$routes->get('/Publishing/Delete/(:segment)', 'Publishing::Delete_data_publishing/$1', ['filter' => 'role:Admin']);


// Performer routes
$routes->get('Performer', 'Performer::index', ['filter' => 'role:Admin']);
$routes->post('Create_data_performer', 'Performer::Create_Data_performer', ['filter' => 'role:Admin']);
$routes->get('/Performer/Detail/(:segment)', 'Performer::Detail_data_performer/$1', ['filter' => 'role:Admin']);
$routes->post('/Update_data_performer/(:segment)', 'Performer::Update_data_performer/$1', ['filter' => 'role:Admin']);
$routes->get('/Performer/Delete/(:segment)', 'Performer::Delete_data_performer/$1', ['filter' => 'role:Admin']);


// Customer routes
$routes->get('Customer', 'Customer::index', ['filter' => 'role:Admin']);
$routes->post('Create_data_customer', 'Customer::Create_data_customer', ['filter' => 'role:Admin']);
$routes->get('/Customer/Detail/(:segment)', 'Customer::Detail_data_customer/$1', ['filter' => 'role:Admin']);
$routes->post('/Update_data_customer/(:segment)', 'Customer::Update_data_customer/$1', ['filter' => 'role:Admin']);
$routes->get('/Customer/Delete/(:segment)', 'Customer::Delete_data_customer/$1', ['filter' => 'role:Admin']);


// Contract routes
$routes->get('Contract', 'Contract::index', ['filter' => 'role:Admin']);
$routes->post('Create_data_contract', 'Contract::Create_data_contract', ['filter' => 'role:Admin']);


// User Management routes
$routes->get('User_management', 'Management::Index', ['filter' => 'role:Admin']);





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