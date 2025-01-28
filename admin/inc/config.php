<?php
// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Africa/Addis_Ababa');

// Host Name
$dbhost = 'sql205.infinityfree.com';

// Database Name
$dbname = 'if0_38193090_yqqrzvsxuw';

// Database Username
$dbuser = 'if0_38193090';

// Database Password
$dbpass = 'S7SKOUCyAVj9gw';

// Defining base url
define("BASE_URL", "");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}
