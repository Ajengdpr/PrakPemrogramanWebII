<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('register', function ($routes) {
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});
$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});
$routes->get('/dashboard', 'Dashboard::index');
$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});
$routes->get('about', 'Page::about');
$routes->get('contact', 'Page::contact');
$routes->get('faqs', 'Page::faqs');
$routes->get('/news', 'News::index');
$routes->get('/news/(:any)', 'News::viewNews/$1');
$routes->group('admin', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('buku', 'BukuAdmin::index');
    $routes->add('buku/new', 'BukuAdmin::create');
    $routes->get('buku/(:segment)/edit', 'BukuAdmin::edit/$1');
    $routes->post('buku/(:segment)/edit', 'BukuAdmin::edit/$1');
    $routes->get('buku/(:segment)/delete', 'BukuAdmin::delete/$1');
});
$routes->setAutoRoute(true);