<?php
require_once 'BaseDao.class.php';


class ReviewDao extends BaseDao{

  public $table = 'Reviews';

  public function __construct(){
    parent::__construct($this->table);
  }

  public function update_review($review, $review_id){
    $entity[':id'] = $review_id;
    $query= 'UPDATE '.  $this->table . ' SET ';
    foreach ($review as $key => $value) {
      $query .= $key . '=:' . $key . ', ';
      $entity[':' . $key] = $value;
    }
    $query = rtrim($query,', ') . ' WHERE id=:id';
    return $this->update($entity, $query);
  }

  public function delete_review($review_id){
    $entity[':id'] = $review_id;
    $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
    return $this->execute($entity, $query);
  }

}

 ?>
