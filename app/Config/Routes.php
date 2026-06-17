<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Caisse 
$routes->get('/caisse/numero', 'Caisse::getPage');