<?php
/**
*
*  Main Model class 
*
 **/

 class Model 
 {
    use Database;
    protected $table = 'users';    
    protected $limit = 10;    
    protected $offset = 0;    
    /*
    function test()
    {
      $query = "select * from users";
      $result = $this->query($query);
      show($result);
    }
    */

    /*  return multiple row of data */
    public function where($data, $data_not = [])
    {
      $keys = array_keys($data);
      $keys_not = array_keys($data_not);
      $query = "select * from $this->table where ";

      foreach($keys as $key){
        $query .= $key . " = :" . $key . " && ";
      }

      foreach($keys_not as $key){
        $query .= $key . " != :" . $key . " && ";
      }

      $query = trim($query, " && ");

      // $query .= "select * from $this->table where id = :id && data = now() && id != :id ";
      $query .= " limit $this->limit offset $this->offset";
      // echo $query;
      //  $this->query($query, ['id'=>23]);
      $data = array_merge($data, $data_not);
      return $this->query($query, $data);
    }

    /*  return 1 row of data */
    public function first($data, $data_not = [])
    {
      $keys = array_keys($data);
      $keys_not = array_keys($data_not);
      $query = "select * from $this->table where ";

      foreach($keys as $key){
        $query .= $key . " = :" . $key . " && ";
      }

      foreach($keys_not as $key){
        $query .= $key . " != :" . $key . " && ";
      }

      $query = trim($query, " && ");

      $query .= " limit $this->limit offset $this->offset";
      $data = array_merge($data, $data_not);

      $result = $this->query($query, $data);
      if($result)
        return $result[0];

      return false;
    }

     
    /* ====== INSERT ====== */
    public function insert($data)
    {
      $keys = array_keys($data);

      $query = "insert into $this->table (".implode(",", $keys).") values (:".implode(",:", $keys).")";
      // echo $query;
      $this->query($query, $data);
      return false;
      
    }

     
    /* ====== UPDATE ====== */
    public function update($id, $data, $id_column = 'id')
    {
      
    }

    /* ====== DELETE ====== */
    public function delete($id, $id_column = 'id')
    {
      $data[$id_column] = $id;
      $query = "delete from $this->table where $id_column = :$id_column ";
      // echo $query;
 
      $this->query($query, $data);

      return false;
    }

 }


