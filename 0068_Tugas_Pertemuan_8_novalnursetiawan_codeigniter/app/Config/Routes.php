<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes = objek router,
// get = metodo pengiriman data, 
// '/data_diri' = file data_diri.php
// 'home' = file Home.php yang berada di folder Controller
//  '::data_diri' =  method atau function yang berada di file Home.php  
$routes->get('/data_diri', 'Home::about');
