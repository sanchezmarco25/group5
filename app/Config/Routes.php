<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('auth/register', 'Auth::register');
$routes->post('auth/login_process', 'Auth::login_process');
$routes->get('auth/logout', 'Auth::logout');

$routes->get('admin/dashboard', 'Admin::index');
$routes->get('customer/dashboard', 'Customer::index');
$routes->get('technician/dashboard', 'Technician::index');
$routes->post('admin/register_employee', 'Admin::register_employee');
$routes->get('register', 'Home::register');