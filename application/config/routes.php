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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'home_controller';
$route['home/:any'] = 'home_controller/index';
$route['product'] = 'product_controller';
$route['search'] = 'product_controller/search';
$route['search/:any'] = 'product_controller/search';
$route['kategori'] = 'product_controller/kategori';
$route['kategori/:any'] = 'product_controller/kategori';
$route['contact'] = 'home_controller/contact';
$route['account'] = 'home_controller/account';
$route['user-jual'] = 'user_controller/jualBarangPage';
$route['barang-jual'] = 'user_controller/jualBarang';
$route['user'] = 'user_controller';
$route['user-signup'] = 'user_controller/signup';
$route['user-signin'] = 'user_controller/signin';
$route['user-logout'] = 'user_controller/logout';
$route['user-show'] = 'user_controller/showuser';
$route['user-update'] = 'user_controller/update_user';
$route['list-barang'] = 'user_controller/list_barang';
$route['delete-barang'] = 'product_controller/deleteBarang';
$route['edit-barang'] = 'product_controller/editBarang';
$route['update-barang'] = 'product_controller/updateBarang';