<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin'] = 'admin/Admin_Dashboard';

$route['login'] = 'admin/Auth/login';
$route['logout'] = 'admin/Auth/logout';

$route['admin/dashboard'] = 'admin/Admin_Dashboard';

$route['admin/slider'] = 'admin/Admin_Slider';
$route['admin/slider/tambah'] = 'admin/Admin_Slider/tambah';
$route['admin/slider/edit'] = 'admin/Admin_Slider/edit';
$route['admin/slider/edit/(:any)'] = 'admin/Admin_Slider/edit/$1';
$route['admin/slider/enable'] = 'admin/Admin_Slider/enable';
$route['admin/slider/enable/(:any)'] = 'admin/Admin_Slider/enable/$1';
$route['admin/slider/disable'] = 'admin/Admin_Slider/disable';
$route['admin/slider/disable/(:any)'] = 'admin/Admin_Slider/disable/$1';
$route['admin/slider/hapus'] = 'admin/Admin_Slider/hapus';
$route['admin/slider/hapus/(:any)'] = 'admin/Admin_Slider/hapus/$1';

$route['admin/profil'] = 'admin/Admin_Profil';

$route['admin/visi-misi'] = 'admin/Admin_Visi_Misi';

$route['admin/struktur-organisasi'] = 'admin/Admin_Struktur_Organisasi';
$route['admin/struktur-organisasi/tambah'] = 'admin/Admin_Struktur_Organisasi/tambah';
$route['admin/struktur-organisasi/edit'] = 'admin/Admin_Struktur_Organisasi/edit';
$route['admin/struktur-organisasi/edit/(:any)'] = 'admin/Admin_Struktur_Organisasi/edit/$1';
$route['admin/struktur-organisasi/hapus'] = 'admin/Admin_Struktur_Organisasi/hapus';
$route['admin/struktur-organisasi/hapus/(:any)'] = 'admin/Admin_Struktur_Organisasi/hapus/$1';

$route['admin/skema-sertifikasi'] = 'admin/Admin_Skema_Sertifikasi';
$route['admin/skema-sertifikasi/tambah'] = 'admin/Admin_Skema_Sertifikasi/tambah';
$route['admin/skema-sertifikasi/edit'] = 'admin/Admin_Skema_Sertifikasi/edit';
$route['admin/skema-sertifikasi/edit/(:any)'] = 'admin/Admin_Skema_Sertifikasi/edit/$1';
$route['admin/skema-sertifikasi/hapus'] = 'admin/Admin_Skema_Sertifikasi/hapus';
$route['admin/skema-sertifikasi/hapus/(:any)'] = 'admin/Admin_Skema_Sertifikasi/hapus/$1';

$route['admin/unit-kompetensi'] = 'admin/Admin_Unit_Kompetensi';
$route['admin/unit-kompetensi/(:any)'] = 'admin/Admin_Unit_Kompetensi/tampil/$1';
$route['admin/unit-kompetensi/(:any)/tambah'] = 'admin/Admin_Unit_Kompetensi/tambah/$1';
$route['admin/unit-kompetensi/(:any)/edit'] = 'admin/Admin_Unit_Kompetensi/edit';
$route['admin/unit-kompetensi/(:any)/edit/(:any)'] = 'admin/Admin_Unit_Kompetensi/edit/$1/$2';
$route['admin/unit-kompetensi/(:any)/hapus'] = 'admin/Admin_Unit_Kompetensi/hapus';
$route['admin/unit-kompetensi/hapus/(:any)'] = 'admin/Admin_Unit_Kompetensi/hapus/$1';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
