<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'home/register';
$route['req'] = 'home/req';
$route['logout'] = 'home/logout';
$route['login'] = 'home/login';
$route['signin'] = 'home/signin';
$route['keranjang/(:any)'] = 'home/keranjang/$1';
$route['lupa_password'] = 'home/forget';
$route['daftar_pesanan'] = 'admin/list_pesanan';
$route['detail_brg/(:any)'] = 'home/detail/$1';
$route['tambah/(:any)'] = 'home/tambah/$1';
$route['proses/(:any)'] = 'home/proses/$1';
$route['detail_pesanan/(:any)'] = 'home/detail_pesanan/$1';
$route['informasi/(:any)'] = 'home/informasi/$1';
$route['delete/(:num)/(:any)'] = 'home/delete/$1/$2';
$route['update/(:num)/(:any)'] = 'home/update/$1/$2';

$route['simpan_brg'] = 'admin/simpan_brg';
$route['tambah_produk'] = 'admin/tambah_produk';
$route['tambah/(:any)'] = 'home/tambah/$1';
$route['tambah_stok/(:any)'] = 'admin/tambah/$1';
$route['simpan_stok/(:any)'] = 'admin/simpan/$1';
$route['detail/(:any)'] = 'admin/detail/$1';
$route['proses_pesanan/(:any)'] = 'admin/proses_pesanan/$1';
$route['admin'] = 'admin';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
