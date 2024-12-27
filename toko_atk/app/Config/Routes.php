<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/chart', 'Home::chart');
$routes->get('/checkout', 'Home::checkout');

service('auth')->routes($routes);
$routes->post('/submit', 'Home::submit');

//admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/dashboard', 'AdminController::index');
$routes->get('/admin/KoleksiAtk', 'AdminController::KoleksiAtk');
$routes->get('/admin/KoleksiAtk/tambah', 'AdminController::KoleksiAtkTambah');
$routes->post('/admin/KoleksiAtk/tambah', 'AdminController::createAtk');
$routes->get('/admin/KoleksiAtk/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/KoleksiAtk/update/(:num)', 'AdminController::update/$1');
$routes->get('/admin/KoleksiAtk/hapus/(:num)', 'AdminController::hapus/$1');

$routes->get('admin/transaksi', 'AdminController::transaksi');
$routes->get('admin/transaksi/ubahstatus/(:num)', 'AdminController::transaksiUbahStatus/$1');
$routes->get('admin/transaksi/hapus/(:num)', 'AdminController::transaksiHapus/$1');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('admin/pelanggan/tambah', 'AdminController::pelangganTambah');
$routes->post('admin/pelanggan/tambah', 'AdminController::prosesTambahPelanggan');
$routes->get('admin/pelanggan/hapus/(:num)', 'AdminController::pelangganHapus/$1');

$routes->get('file-images/(:segment)/(:segment)', 'AdminController::images/$1/$2');

