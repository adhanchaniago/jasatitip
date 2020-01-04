<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'home/register';
$route['req'] = 'home/req';
$route['logout'] = 'home/logout';
$route['login'] = 'home/login';
$route['signin'] = 'home/signin';
$route['tambah/(:any)'] = 'home/tambah/$1';
$route['keranjang/(:any)'] = 'home/keranjang/$1';
$route['lupa_password'] = 'home/forget';
$route['detail/(:any)'] = 'home/detail/$1';

$route['admin'] = 'admin';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
