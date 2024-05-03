<?php

/*  prevent access to this file */
// defined('ROOTPATH') OR exit('Access Denied!');

class _404 extends Controller
{
  use Controller;
  // public function index($a = '', $b = '', $c = '')
  public function index()
  {
    echo "404 Page not found controller";
  }
}