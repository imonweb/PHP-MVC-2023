<?php 

class Home extends Controller
{
  public function index($a = '', $b = '', $c = '')
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
    $result = $user->findAll();
    show($result);

 
    $this->view('home');
  }
}

// $home = new Home;
// $home->index();

// call_user_func_array([$home, 'index'], ['a' => 'something', 'b' => 'b something', 'c' => 'cwomething']);