<?php
// Site settings
$baseURL = 'http://www.swarzie.com/';

// Database settings
$dbHost     = "db5000289773.hosting-data.io";
$dbUsername = "dbu499275";
$dbPassword = "Gal%1981";
$dbName     = "dbs283083";

define('DB_HOST', $dbHost);
define('DB_USERNAME', $dbUsername);
define('DB_PASSWORD', $dbPassword);
define('DB_NAME', $dbName);


if(!session_id()){
 session_start();
}

$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';