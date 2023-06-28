<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['profiles'] = 'ProfileController/index';
$route['profiles/create'] = 'ProfileController/create';
$route['profiles/store'] = 'ProfileController/store';
$route['profiles/edit/(:num)'] = 'ProfileController/edit/$1';
$route['profiles/update/(:num)'] = 'ProfileController/update/$1';
$route['profiles/delete/(:num)'] = 'ProfileController/delete/$1';
