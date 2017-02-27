<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cambio Tiempo Semaforos</title>
    <link rel="stylesheet" href="/tarea7/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="/tarea7/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <form>
        <h1> Introduzca un intervalo para los semaforos </h1>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-2">
            <label for="intervalo_nm" class="control-label"> Intervalo (segundos)</label>
          </div>
          <div class="col-sm-2">
            <input type="number" class="form-control" name="intervalo_nm" placeholder="Introduzca un numero" id="numIntervalo" />
          </div>

        </div>

      </div>
      <button type="button" id="btnSave" class="btn btn-success">Guardar</button>
      <a href="<?php echo base_url('main/index')?>" class="btn btn-info">Regresar</a>
      </form>

    </div>

      <script type="text/javascript" src="/tarea7/js/admin.js"></script>
  </body>
</html>
