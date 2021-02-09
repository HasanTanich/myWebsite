<?php
require_once 'BaseDao.class.php';


class UserDao extends BaseDao{

  public $table = 'users';

  public function __construct(){
    parent::__construct($this->table);
  }

  public function get_user_by_email($email){
    $query = "SELECT * FROM $this->table WHERE email=:email";
    return @($this->execute_query($query, ['email' => $email]))[0];
  }
  
}

 ?>
