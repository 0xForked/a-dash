<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Auth System
$route['login'] = 'auth/login';
$route['register'] = 'auth/create_user';
$route['forgot'] = 'auth/forgot_password';
$route['reset/(:any)'] = 'auth/reset_password/$1';

//Backoffice
$route['dashboard'] = 'dashboard/index';
$route['dashboard/index'] = 'dashboard/index';

//setting menu
$route['dashboard/setting/general'] = 'dashboard/setting_general';
$route['dashboard/setting/user'] = 'dashboard/user_management';
$route['dashboard/setting/user/delete/(:any)'] = 'auth/delete/$1';

//Frontoffice
//$route[''] = '/';
//$route[''] = '/';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
