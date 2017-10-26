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
$route['jobs/edit/(:any)'] = 'jobs/edit/$1';
$route['jobs'] = 'jobs';

$route['auth'] = 'auth';
$route['auth/login'] = 'auth/login';
$route['custies'] = 'custies';
$route['custies/newq'] = 'custies/newq';
$route['custies/search'] = 'custies/search';
$route['custies/edit'] = 'custies/edit';
$route['custies/jedit'] = 'custies/jedit';
$route['custies/search'] = 'custies/search';

/* with data */
$route['custies/view/(:any)'] = 'custies/view/$1';
$route['custies/newq/(:any)'] = 'custies/newq/$1';
$route['custies/newj/(:any)'] = 'custies/newj/$1';
$route['custies/edit/(:any)'] = 'custies/edit/$1';
$route['custies/cdelete/(:any)'] = 'custies/cdelete/$1';
$route['custies/jedit/(:any)'] = 'custies/jedit/$1/$2';


$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
/*$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/
