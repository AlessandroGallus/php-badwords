<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>  

  <?php 
  $censura = $_GET['censura'];
  ?>

  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea nam iusto distinctio nobis maxime ullam id quis quod itaque perspiciatis.
  <?php 
  
  $testo="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea nam iusto distinctio nobis maxime ullam id quis quod itaque perspiciatis.";
  
  
  
  ?>

  <h1>
  <?php 
  echo $testo;
  ?>
  </h1>

  <h2>
  stringa modificata: <?php echo str_replace($censura, '***', $testo)?>
  </h2>

  <!-- esempio url: http://localhost/?censura=ipsum -->
</body>
</html>