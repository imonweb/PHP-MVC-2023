<?php

class Products extends Controller
{
  public function index()
  {
    // echo "This is the products controller";
    $this->view('products/products');
  }
}