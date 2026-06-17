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
>>>>>>> eb32c14c6a2b93a717a8e25cb5663c3b3489bdeb
