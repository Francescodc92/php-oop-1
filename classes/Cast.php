<?php 
require_once __DIR__.'/Movie.php';
class Cast{
  public $name;
  public $lastName;
  public $age;

  public function __construct(
    string $name,
    string $lastname,
    int $age
  )
  {
    $this-> name = $name;
    $this-> lastName = $lastname;
    $this-> age = $age;
  }

  public function getFullname(){
    return $this->name .' '. $this->lastName;
  }
}



?>