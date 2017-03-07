<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema Semaforos</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Russo+One" rel="stylesheet">
  <script src="https://use.fontawesome.com/01d9e54a7d.js"></script>
  <link rel="stylesheet" href="css/elegir.css">
  </head>
  <body>
    <div class="container-fluid text-center">
      <div class="jumbotron bg-dark-blue">
          <h1>Bienvenidos al sistema de pantallas digitales de Semáforos</h1>
          <p>Por favor escoja una opción</p>
          <div class="row">
            <div class="col-sm-4">
              <a href="index.php?calle=A" target="_blank"class="btn btn-default"><i class="fa fa-road" onclick="enableB();"></i> Calle A</a>
            </div>
            <div class="col-sm-4">
              <a href="index.php?calle=B"  target="_blank"class="btn btn-default"><i class="fa fa-road"></i> Calle B</a>
            </div>
            <div class="col-sm-4">
              <a href="config.php" class="btn btn-default"><i class="fa fa-lock"></i> Admin</a>
            </div>
          </div>
      </div>

  </body>
</html>
