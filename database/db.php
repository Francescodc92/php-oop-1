<?php 
  require_once __DIR__.'/../classes/Movie.php';
  


  $Movies = [
    $onePice = new Movie('one pice', null , 2023 , ['fantasy'] , false),
    $fastAndFouriouse = new Movie('fast and fouriouse', 'ciccio' , 2017 , ['action'] , true),
    $barbie = new Movie('barbie', 'ciccioDue' , 2023 , ['booh', 'magari lo avessi capito'] , true),

  ];
  

  ?>