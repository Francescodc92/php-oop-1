<?php 
  require_once __DIR__.'/../classes/Movie.php';
  


  $Movies = [
    $onePice = new Movie(
      'one pice',
      null ,
      2023 ,
      ['fantasy'] ,
      [
        new Cast('geppetto','booh', 42),
        new Cast('attore2','cognome2', 42),
        new Cast('attore3','cognome3', 42),
        new Cast('attore4','cognome4', 42),
      ],
      false
    
    ),
    $fastAndFouriouse = new Movie(
      'fast and fouriouse', 
      'ciccio' , 
      2017 , 
      ['action'] ,
      [new Cast('filippa','booh2', 30), new Cast('attore','cognome', 30)]
      , 
      true
    ),

    $barbie = new Movie(
      'barbie',
      'ciccioDue' , 
      2023 , 
      ['booh', 'magari lo avessi capito'],
      [
        new Cast('filippa2','booh3', 50)
      ], 
      true
    ),

  ];
  

  ?>