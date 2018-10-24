<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//---------------------HOME
$route['login'] = 'home/login';
$route['valid-login'] = 'home/valid_login_users';
//---------------------USER ADMIN
$route['users/profil'] = 'users';
$route['users/logout'] = 'users/logout';

$route['kecamatan'] = 'users/kecamatan';
$route['add_kecamatan'] = 'users/add_kecamatan';
$route['kecamatan/(:num)'] = 'users/edit_kecamatan/$1';
$route['post_edit_kecamatan'] = 'users/post_edit_kecamatan';

$route['kelurahan'] = 'users/kelurahan';
$route['add_kelurahan'] = 'users/add_kelurahan';
$route['kelurahan/(:num)'] = 'users/edit_kelurahan/$1';
$route['post_edit_kelurahan'] = 'users/post_edit_kelurahan';

$route['puskesmas'] = 'users/puskesmas';
$route['add_puskesmas'] = 'users/add_puskesmas';
$route['puskesmas/(:num)'] = 'users/edit_puskesmas/$1';
$route['post_edit_puskesmas'] = 'users/post_edit_puskesmas';

$route['balita'] = 'users/balita';
$route['add_balita'] = 'users/add_balita';
$route['balita/(:num)'] = 'users/detail_balita/$1';
$route['balita/edit/(:num)'] = 'users/edit_balita/$1';
$route['post_edit_balita'] = 'users/post_edit_balita';
$route['delete-balita'] = 'users/delete_balita';

$route['posyandu'] = 'users/posyandu';
$route['add_posyandu'] = 'users/add_posyandu';
$route['posyandu/(:num)'] = 'users/edit_posyandu/$1';
$route['post_edit_posyandu'] = 'users/post_edit_posyandu';

$route['jadwal'] = 'users/jadwal';
$route['add_jadwal'] = 'users/add_jadwal';
$route['jadwal/(:num)'] = 'users/edit_jadwal/$1';
$route['post_edit_jadwal'] = 'users/post_edit_jadwal';
$route['delete-jadwal'] = 'users/delete_jadwal';

$route['pengukuran'] = 'users/pengukuran';
$route['add_pengukuran'] = 'users/add_pengukuran';
$route['pengukuran/(:num)'] = 'users/detail_pengukuran/$1';
$route['pengukuran/edit/(:num)'] = 'users/edit_pengukuran/$1';
$route['post_edit_pengukuran'] = 'users/post_edit_pengukuran';
$route['delete-pengukuran'] = 'users/delete_pengukuran';

$route['kader'] = 'users/kader';
$route['add_kader'] = 'users/add_kader';
$route['kader/(:num)'] = 'users/edit_kader/$1';
$route['post_edit_kader'] = 'users/post_edit_kader';

//---------------------Laporan
$route['list_kelurahan'] = 'users/getKelurahan';
$route['list_posyandu'] = 'users/getPosyandu';
$route['rekap_pb'] = 'users/rekap_pb';
$route['rekap_pb_filter'] = 'users/loadDataTableRekapPB';
$route['resume_kp'] = 'users/resume_kp';
$route['resume_kp_filter'] = 'users/loadDataTableResumeKP';

//---------------------PUSKESMAS
$route['ipuskesmas'] = 'puskesmas';
$route['ipuskesmas/logout'] = 'puskesmas/logout';
$route['ipuskesmas/puskesmas'] = 'puskesmas/puskesmas';
$route['ipuskesmas/balita'] = 'puskesmas/balita';
$route['ipuskesmas/posyandu'] = 'puskesmas/posyandu';
$route['ipuskesmas/jadwal'] = 'puskesmas/jadwal';
$route['ipuskesmas/pengukuran'] = 'puskesmas/pengukuran';
$route['ipuskesmas/kader'] = 'puskesmas/kader';
//---------------------POSYANDU
$route['iposyandu'] = 'posyandu';
$route['iposyandu/logout'] = 'posyandu/logout';