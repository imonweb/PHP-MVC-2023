<?php

/*  prevent access to this file */
// defined('ROOTPATH') OR exit('Access Denied!');

if($_SERVER['SERVER_NAME'] == 'localhost')
{
  /*  database config */
  define('DBNAME', 'php_qp_mvc');
  define('DBHOST', 'localhost');
  define('DBUSER', 'imon');
  define('DBPASS', 'p@ssw0rd');
  define('DBDRIVER', '');
  /*  local machine */
  define('ROOT', 'http://localhost/php/PHP_2023/Quick_Programming/PHP-MVC-2023/public');
} else
{
  /* online */
  define('ROOT', 'https://www.website.com');

   /*  database config */
  define('DBNAME', 'php_qp_mvc');
  define('DBHOST', 'localhost');
  define('DBUSER', 'imon');
  define('DBPASS', 'p@ssw0rd');
  define('DBDRIVER', '');
}

define('APP_NAME', "My Webiste");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);