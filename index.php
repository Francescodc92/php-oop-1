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
  require_once __DIR__.'/database/db.php';
 
  ?>

  
  <table>
    <?php 
       require_once __DIR__.'/components/table-head.php';
    ?>
    <tbody>
      <?php 
       require_once __DIR__.'/components/table-b-tr.php';
      ?>
    </tbody>
  </table>
</body>
</html>