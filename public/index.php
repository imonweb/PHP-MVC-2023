<?php 

session_start();
 

/*  Valid PHP Version? */
$minPHPVersion = '7.0';
if(phpversion() < $minPHPVersion)
{
  die("Your PHP version must be {$minPHPVersion} or higher to run this app! Your current version is " . phpversion());
}

/*  Path to this file */
define('ROOTHPATH', __DIR__ . DIRECTORY_SEPARATOR);

// echo ROOTHPATH;

require "../app/core/init.php";

DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();
