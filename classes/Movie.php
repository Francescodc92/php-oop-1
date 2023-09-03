<?php 
require_once __DIR__.'/Cast.php';
class Movie {
  public $title;
  public $director;
  private $year;
  public $genre = [];
  public $cast = [];
  private $isAvailable;

  public function __construct( 
    string $title,
    ?string $director, 
    int $year, 
    array|string $genre,
    array $cast,
    bool $isAvailable
  ) //per ora come stringa ma da cambiare in array nel bonus 1  
  {
    $this-> title = $title;
    $this-> director = $director;
    $this-> setYear($year);
    $this-> setGenre($genre);
    $this-> cast = $cast;
    $this-> setIsAvailable($isAvailable);
  }

  // setters 
  public function setIsAvailable(bool $available){
    $this-> isAvailable = $available;
  }

  public function setYear(int $year){
    $this-> year = $year;
  }

  public function setGenre(array $genre){
    $this-> genre = $genre;
  }

  //getters
  public function getIsAvailable(){
    return $this-> isAvailable; 
  }
  public function getYear(){
    return $this-> year; 
  }

  public function getGenre(){
    return implode(',', $this -> genre);
  }

}
?>