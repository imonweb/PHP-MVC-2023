<?php
/**
*
*  Main Model class 
*
 **/

 class Model 
 {
    use Database;

    function test()
    {
      $query = "select * from users";
      $result = $this->query($query);
      show($result);
    }

 }

