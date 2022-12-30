<?php 

class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
  {
    $model = new Model;
    $model->test();
    echo "This is the home controller";
    $this->view('home');
  }
}

// $home = new Home;
// $home->index();

// call_user_func_array([$home, 'index'], ['a' => 'something', 'b' => 'b something', 'c' => 'cwomething']);