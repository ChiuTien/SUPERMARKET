<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProduitController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Caisse 
<<<<<<< HEAD
$routes->get('/caisse/numero', 'CaisseController::getPage');
=======
$routes->get('/caisse/numero', 'Caisse::getPage');

//TEST
$routes->get('/test','ProduitController::index');
>>>>>>> 68b1eb5 (Premiere affichage)
