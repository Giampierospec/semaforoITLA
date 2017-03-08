<?php
if($_POST){
  file_put_contents('config.txt', json_encode($_POST));
  header("Location:index.php");
}

$datos = json_decode(file_get_contents('config.txt'),true);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Russo+One" rel="stylesheet">
    <script src="https://use.fontawesome.com/01d9e54a7d.js"></script>
    <meta charset="utf-8">
    <title>Interfaz de Admin</title>
    <link rel="stylesheet" href="css/semaforo.css">
    <link rel="stylesheet" href="css/config.css">
  </head>
  <body>
      <div class="container-fluid text-center">
          <div class="jumbotron bg-dark-blue">
            <h1>Escriba el intervalo para los semáforos</h1>
            <form class="form-horizontal" action="" method="post">

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <label for="Green"><p>Introduzca el intervalo para el Verde </p></label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" name="Green" class="form-control" value="<?php echo $datos['Green']; ?>" required/>
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="Red"><p>Introduzca el intervalo para el Rojo</p> </label>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="Red" class="form-control" value="<?php echo $datos['Red']; ?>" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="Yellow"><p>Introduzca el intervalo para el Amarillo</p> </label>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="Yellow" class="form-control" value="<?php echo $datos['Yellow']; ?>" />
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Guardar</button>
              </form>
          </div>
      </div>
  </body>
</html>
