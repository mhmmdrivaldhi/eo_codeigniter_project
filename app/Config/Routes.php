<?php

use CodeIgniter\Router\RouteCollection;
use Config\Database;

/**
 * @var RouteCollection $routes
 */

// Create database with database forge //
$routes->get('create-db', function () {
    $forge = Database::forge();
    if($forge->createDatabase('ci_project_db')) {
        echo 'Database Successfully Created!';
    }
});

$routes->addRedirect('/', 'home');
$routes->get('home', 'Home::index');
$routes->get('event', 'EventController::index');
$routes->get('event/create', 'EventController::create');
$routes->post('event', 'EventController::store');
