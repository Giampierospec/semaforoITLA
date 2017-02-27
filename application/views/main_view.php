<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vista Principal| Semaforo</title>
    <link rel="stylesheet" href="/tarea7/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/tarea7/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/tarea7/css/main_view.css">
  </head>
  <body>
      <div class="container-fluid" id="principal">
        <div class="jumbotron">
          <h1>Bienvenidos a la aplicación de Semaforos con pantallas digitales</h1>
        </div>
        <div class="btn-group-justified">
          <a href="<?php echo base_url('semaforo/semaforo1')?>" target="_blank" class="btn btn-info"> Calle A</a>
          <a href="<?php echo base_url('semaforo/semaforo2')?>" target="_blank"class="btn btn-info"> Calle B</a>
          <a href="<?php echo base_url('admin/administrator')?>"class="btn btn-info">Admin</a>
        </div>


      </div>
  </body>
</html
