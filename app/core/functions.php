<?php 

/*  prevent access to this file */
// defined('ROOTPATH') OR exit('Access Denied!');

check_extensions();

function check_extensions()
{
  $required_extensions = [
    'gd',
  ];

  $not_loaded = [];
  foreach($required_extensions as $ext){
    if(!extension_loaded($ext))
    {
      $not_loaded[] = $ext;
    }
  }
  if(!empty($not_loaded))
  {
    show("Please load the following extension in your php.ini file: <br>" . implode("<br>", $not_loaded));
  }
}

function show($stuff)
{
  echo "<pre>";
  print_r($stuff);
  echo "</pre>";
}


function esc($str)
{
	return htmlspecialchars($str);
}


function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}