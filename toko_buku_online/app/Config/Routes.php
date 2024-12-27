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
$routes->get('/admin/daftar-buku', 'AdminController::daftarBuku');
$routes->get('/admin/daftar-buku/tambah', 'AdminController::daftarBukuTambah');
$routes->post('/admin/daftar-buku/tambah', 'AdminController::createBuku');
$routes->get('/admin/daftar-buku/edit', 'AdminController::daftarBukuEdit');
$routes->get('/admin/daftar-buku/hapus', 'AdminController::daftarBukuHapus');

$routes->get('/admin/transaksi', 'AdminController::transaksi');
$routes->get('/admin/transaksi/ubah-status', 'AdminController::transaksiUbahStatus');
$routes->get('/admin/transaksi/hapus', 'AdminController::transaksiHapus');

$routes->get('/admin/pelanggan', 'AdminController::pelanggan');
$routes->get('/admin/pelanggan/hapus', 'AdminController::pelangganHapus');

$routes->get('file-image/(:segment)/(:segment)', 'AdminController::image/$1/$2');