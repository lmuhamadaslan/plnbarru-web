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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// contoller dashboard admin
$routes->get('dashboard', 'Admin\DashboardController::index');

// controller Logsheet admin
$routes->get('logsheet/k3', 'Admin\LogsheetController::k3');
$routes->get('logsheet/coalhandling', 'Admin\LogsheetController::coalHandling');
$routes->get('logsheet/unit', 'Admin\LogsheetController::unit');

// controller Patrolcheck admin
$routes->get('patrolK3', 'Admin\PatrolcheckController::k3');
$routes->get('patrolK3/emergencyDiesel', 'Admin\PatrolcheckController::emergencyDiesel');
$routes->get('patrolK3/fireFighting', 'Admin\PatrolcheckController::fireFighting');
$routes->get('patrolK3/hydrantIndoor', 'Admin\PatrolcheckController::hydrantIndoor');
$routes->get('patrolK3/hydrantOutdoor', 'Admin\PatrolcheckController::hydrantOutdoor');
$routes->get('patrolK3/isipatrol1', 'Admin\PatrolcheckController::isiPatrol1');
$routes->get('patrolK3/isipatrol2', 'Admin\PatrolcheckController::isiPatrol2');
$routes->get('patrolK3/isipatrol3', 'Admin\PatrolcheckController::isiPatrol3');
$routes->get('patrolK3/isipatrol4', 'Admin\PatrolcheckController::isiPatrol4');

$routes->get('patrolCoalHandling', 'Admin\PatrolcheckController::coalHandling');
$routes->get('patrolUnit', 'Admin\PatrolcheckController::unit');

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
