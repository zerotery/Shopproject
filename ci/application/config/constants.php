<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

define("LAYOUT_URL","http://localhost/Shopproject/ci/asset/css/");

define("THEME1_URL","http://localhost/Shopproject/ci/asset/css/theme1/");
define("THEME2_URL","http://localhost/Shopproject/ci/asset/css/theme2/");
define("JS_URL","http://localhost/Shopproject/ci/asset/js/");
define("JS_THEME1","http://localhost/Shopproject/ci/asset/js/theme1/");
define("JS_THEME2","http://localhost/Shopproject/ci/asset/js/theme2/");
define("BI","https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/");

define("logo_pic","http://localhost/Shopproject/ci/asset/img/");
define("order","http://localhost/Shopproject/ci/uploads/orders/");
define("upload","http://localhost/Shopproject/ci/uploads/profiles/");
define("product","http://localhost/Shopproject/ci/uploads/products/");
define("shop","http://localhost/Shopproject/ci/uploads/shops/");

define("private_key","Tbshop2014");

define("JS_comment","http://localhost/Shopproject/ci/asset/tinymce/");



/* End of file constants.php */
/* Location: ./application/config/constants.php */