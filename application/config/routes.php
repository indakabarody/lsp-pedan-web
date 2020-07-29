<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/Admin_Dashboard';

$route['login'] = 'admin/Auth/login';
$route['logout'] = 'admin/Auth/logout';

$route['admin/dashboard'] = 'admin/Admin_Dashboard';

$route['admin/profil'] = 'admin/Admin_Profil';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
