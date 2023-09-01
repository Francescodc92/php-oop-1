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

  
<table>
    <thead>
      <tr>
        <td>
          titolo
        </td>
        <td>
          direttore
        </td>
        <td>
          anno
        </td>
        <td>
          genere
        </td>
        <td>
          disponibile
        </td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <?php 
           if(  $onePice -> title != null){
            echo $onePice -> title;
          }else{
            echo 'sconosciuto';
          }   
          ?>
        </td>
        <td>
          <?php 
            if($onePice -> director != null){
              echo $onePice -> director;
            }else{
              echo 'sconosciuto';
            }
          ?>
        </td>
        <td>
          <?php 
            if( $onePice -> getYear() != null){
              echo $onePice -> getYear();
            }else{
              echo 'sconosciuto';
            }
            
          ?>
        </td>
        <td>
          <?php 
            if($onePice -> genre != null){
              echo $onePice -> genre;
            }else{
              echo 'sconosciuto';
            }
          ?>
        </td>
        <td>
          <?php 
            if ($onePice -> getIsAvailable() != false ) {
              echo 'disponibile';
            }else{
              echo 'non disponibile';
            }
          ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php 
           if(  $fastAndFouriouse -> title != null){
            echo $fastAndFouriouse -> title;
          }else{
            echo 'sconosciuto';
          }   
          ?>
        </td>
        <td>
          <?php 
            if($fastAndFouriouse -> director != null){
              echo $fastAndFouriouse -> director;
            }else{
              echo 'sconosciuto';
            }
          ?>
        </td>
        <td>
          <?php 
            if( $fastAndFouriouse -> getYear() != null){
              echo $fastAndFouriouse -> getYear();
            }else{
              echo 'sconosciuto';
            }
            
          ?>
        </td>
        <td>
          <?php 
            if($fastAndFouriouse -> genre != null){
              echo $fastAndFouriouse -> genre;
            }else{
              echo 'sconosciuto';
            }
          ?>
        </td>
        <td>
          <?php 
            if ($fastAndFouriouse -> getIsAvailable() != false ) {
              echo 'disponibile';
            }else{
              echo 'non disponibile';
            }
          ?>
        </td>
      </tr>
    </tbody>
  </table>
</body>
</html>