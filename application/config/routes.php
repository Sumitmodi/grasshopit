<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
/*
 * Home page
 */
$route['default_controller'] = "homecontroller/index";

$route['home'] = "homecontroller/index";

$route['add-business'] = "homecontroller/addBusiness";

//$route['contact'] = "homecontroller/contact";

$route['events'] = "homecontroller/events";

$route['about'] = "homecontroller/about";

$route['search'] = "app/search/init";

$route['search/(:any)'] = "app/search/searchRandom";

$route['profile'] = "homecontroller/businessProfile";

$route['profile/(:any)'] = "homecontroller/businessProfile/$1";

$route['privacy'] = "homecontroller/privacy";

$route['business/dashboard/ajax'] = 'business/dashboard/ajax';

$route['category'] = "app/search/category";

$route['category/(:any)'] = "app/search/category";

$route['contact'] = 'entry/contact';

/*
 * Registration
 */
$route['signup'] = "entry/home";

/*
 * Payment Routes
 */
$route['payment'] = "payment/bluepaypayment/index";

$route['payment/missing'] = "payment/bluepaypayment/missing";

$route['payment/approved'] = "payment/bluepaypayment/approved";

$route['payment/declined'] = "payment/bluepaypayment/declined";

$route['payment/cancel'] = 'payment/payment/cancel';

$route['payment/success'] = 'payment/payment/success';


/*
 * Page not found
 */

$route['404_override'] = '';

/*
 * Registration route
 */
$route['register'] = 'entry/registration';

/*
 * Login route
 */
$route['login'] = 'entry/login';
/*
 * Forgot Password
 */
$route['forgot-password'] = 'entry/forgotPassword';

/*
 * Dashboard route
 */
$route['dashboard'] = 'entry/dashboard';

/*
 * Logout route
 */
$route['logout'] = 'entry/logout';

/*
 * Admin Menu
 */
//$route['admin'] = 'admin/admin/index';

$route['admin'] = 'entry/admin';

$route['superadmin'] = 'entry/admin';

$route['superadmin/logout'] = 'entry/adminLogout';

/*
 * Frontend ajax
 */
$route['post/review'] = 'app/reviews/writeReview';

/*
 * Recovery form
 */

$route['recover'] = 'entry/recover';

/*
 * Reset form
 */
$route['reset'] = 'entry/reset';


/*
 * Frontend ajax
 */
$route['post/review'] = 'app/reviews/writeReview';

/*
 * Business extra routes
 */

$route['image/delete/(:any)'] = 'business/dashboard/removeImage';

/*
 * Activation
 */
$route['activate'] = 'entry/activate';