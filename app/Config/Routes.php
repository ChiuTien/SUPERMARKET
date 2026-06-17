<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\ProduitController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Caisse 
$routes->get('/caisse/numero', 'CaisseController::getPage');
<<<<<<< HEAD
=======
$routes->get('/caisse/numero', 'Caisse::getPage');

//TEST
$routes->get('/test','ProduitController::index');
>>>>>>> 68b1eb5 (Premiere affichage)
=======
>>>>>>> 7da2c43 (Nesorina le test kely)
