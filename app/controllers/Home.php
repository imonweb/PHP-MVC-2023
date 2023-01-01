<?php 
/*  Using use keyword outside class is for namespace */
// class Home extends Controller
class Home 
{
  /*  use - inside class is for Trait */
  use Controller;
  // public function index($a = '', $b = '', $c = '')
  public function index()
  {
    // $model = new Model;

    // $model->test();
    // $arr['id'] = 1;
    // $arr['name'] = "john";
    // $arr['age'] = 45;
  
    // $result = $model->where($arr);
    // $result = $model->insert($arr);
    // $result = $model->delete(6);
    /* update */
    /*
    $arr['name'] = 'Josh';
    $arr['age'] = 20;
    $result = $model->update(5, $arr);
    // echo "This is the home controller";
    show($result);
    $this->view('home');
    */

    /* User */
    $user = new User;

    /*  insert */
    // $arr['name'] = 'Boomshalaka';
    // $arr['age'] = 30;

    // $result = $user->insert($arr);

    /*  Show */
    // $result = $user->where(['id'=>2]);
    // $result = $user->findAll();
    // show($result);

    // show($a);
    // show($b);
    // show($c);
    // show("from the index function");
   
    
    $this->view('home');
  }
/*
  public function edit($a = '', $b = '', $c = '')
  {
    show($a);
    show($b);
    show($c);
    show("from the edit function");
    $this->view('home');
  }
  */
}

// $home = new Home;
// $home->index();

// call_user_func_array([$home, 'index'], ['a' => 'something', 'b' => 'b something', 'c' => 'cwomething']);


