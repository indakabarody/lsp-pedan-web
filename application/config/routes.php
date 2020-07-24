<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/Admin_Dashboard';

$route['admin/login'] = 'admin/Auth/login';
$route['admin/logout'] = 'admin/Auth/logout';

$route['admin/dashboard'] = 'admin/Admin_Dashboard';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
