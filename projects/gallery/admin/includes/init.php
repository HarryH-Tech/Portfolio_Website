<?php


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR); // same with if method
 
if (!defined('SITE_ROOT')) {
	define('SITE_ROOT', 'C:' . DS . 'MAMP' . DS . 'htdocs' . DS . 'Photo_Gallery' );  // absolute path
}
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');
 
require_once ("functions.php");
require_once ("config.php");
require_once ("database.php");
require_once (__DIR__ . DIRECTORY_SEPARATOR . "db_object.php");
require_once ("user.php");
require_once (__DIR__ . DIRECTORY_SEPARATOR . "photo.php");
require_once ("session.php");
require_once ("paginate.php");
require_once ("comment.php");


// C:\MAMP\htdocs\Photo_Gallery

?>