<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'home/register';
$route['login'] = 'home/login';
$route['keranjang'] = 'home/keranjang';
$route['detail/(:any)'] = 'home/detail/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
