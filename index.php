<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--style css-->
  <link rel="stylesheet" href="./css/style.css">
  <title> PHP OOP 1 </title>
</head>
<body>
  <?php 
  class Muvie {
    public $title;
    public $director;
    private $year;
    public $genre;
    private $isAvailable;

    public function __construct( 
      string $title,
      ?string $director, 
      int $year, 
      string $genre,
      bool $isAvailable
    ) //per ora come stringa ma da cambiare in array nel bonus 1  
    {
      $this-> title = $title;
      $this-> director = $director;
      $this-> setYear($year);
      $this-> genre = $genre;
      $this-> setIsAvailable($isAvailable);
    }

    // setters 
    public function setIsAvailable(bool $available){
      $this-> isAvailable = $available;
    }

    public function setYear(int $year){
      $this-> year = $year;
    }

    //getters
    public function getIsAvailable(){
      return $this-> isAvailable; 
    }
    public function getYear(){
      return $this-> year; 
    }

}
  


  $onePice = new Muvie('one pice', null , 2023 , 'fantasy' , false);
  $fastAndFouriouse = new Muvie('fast and fouriouse', 'ciccio' , 2017 , 'action' , true);
  ?>

</body>
</html>