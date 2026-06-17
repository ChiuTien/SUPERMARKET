<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProduitController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Caisse 
$routes->get('/caisse/numero', 'CaisseController::getPage');
