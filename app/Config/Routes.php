<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Controlador::index');
$routes->get('lista', 'Clientes::listar');