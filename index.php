<?php
session_start();

define('APP_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', 'commerce101');
define('SITE_TITLE', 'PREZZY');

require_once('Core' . DS . 'helper.php');
require_once('Core' . DS . 'Connect.php');





$conn = new Connect('localhost','root','','prezzy');



$url = parse_url($_SERVER['REQUEST_URI'])['path'];

require_once('Core' . DS . 'router.php');
