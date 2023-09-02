<?php 

  require_once __DIR__.'/../database/db.php';

  foreach ($Movies as $muvie) {
?>
    
      <tr >
      <td>
        <?php 
        if(  $muvie -> title != null){
          echo $muvie -> title;
        }else{
          echo 'sconosciuto';
        }   
        ?>
      </td>
      <td>
        <?php 
          if($muvie -> director != null){
            echo $muvie -> director;
          }else{
            echo 'sconosciuto';
          }
        ?>
      </td>
      <td>
        <?php 
          if( $muvie -> getYear() != null){
            echo $muvie -> getYear();
          }else{
            echo 'sconosciuto';
          }
          
        ?>
      </td>
      <td>
        <?php 
          if($muvie -> genre != null){
            echo $muvie -> getGenre();
          }else{
            echo 'sconosciuto';
          }
        ?>
      </td>
      <td>
        <?php 
          if ($muvie -> getIsAvailable() != false ) {
            echo 'disponibile';
          }else{
            echo 'non disponibile';
          }
        ?>
      </td>
      </tr>
    
<?php      
  };
?>