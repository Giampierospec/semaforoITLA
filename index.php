<?php
if(!isset($_GET['calle'])){
  header("Location:elegir.php");
}
$calle = $_GET['calle'];
$datos = json_decode(file_get_contents('config.txt'),true);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Russo+One" rel="stylesheet">
    <script src="https://use.fontawesome.com/01d9e54a7d.js"></script>
    <meta charset="utf-8">
    <title>Semaforo Calle | <?php echo $calle ?></title>
    <link rel="stylesheet" href="css/semaforo.css">
  </head>
  <body>
    <div class="container-fluid text-center">
    <div class="jumbotron bg-dark-blue">
      <h1>Semaforo Calle | <?php echo $calle ?></h1>
      <p class="caption">Este es el semáforo corriendo</p>
      <div id="traffic-light">
      <div id="Red" class="bulb"></div>
      <div id="Yellow" class="bulb"></div>
      <div id="Green" class="bulb"></div>
    </div>
    <div id="message">

    </div>
    </div>
  </div>
<?php if($calle =='A'): ?>
  <script type="text/javascript">
    var tiempoRed = <?php echo $datos['Red'] ?> * 1000;
    var tiempoGreen = <?php echo $datos['Green'] ?> * 1000;
  </script>
<script src="js/semaforoa.js"></script>
<?php endif;?>
<?php if($calle =='B'): ?>
<script src="js/semaforob.js"></script>
<?php endif;?>
  </body>
</html>
