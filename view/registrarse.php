<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../js/persona.js"></script>
  <!-- se estan agregandos los archivos de link con require_once  -->
  <?php require_once('librerias.php'); ?>
</head>

<body>
  <!-- se esta agregando toda la estructura html con lo siguiente require_once -->
  <div class="container">
    <!-- alerta -->
    <h1>Registro</h1>
    <br>
    <div id="mensaje" class="alert alert-success 
    alert-dismissible fade show" role="alert"
    style="display:none">
      <!-- cuerpo del mensaje -->
      <div id="cuerpoMensaje">
        Se guardó correctamente
      </div>
      <button type="button" class="btn-close" 
      data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <!-- <form action="" method="post"> -->
    <div class="row">
      <div class="col col-xl-6 col-12">
        <label for="">Nombres</label>
        <input type="text" class="form-control" onfocusout="validarPrimerNombre();" required id="primer_Nombre" name="primer_Nombre" minlength="1" maxlength="30">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">Apellidos</label>
        <input type="text" class="form-control" onfocusout="validarPrimer_apelli();" id="primer_Apellido" required name="primer_Apellido" minlength="1" maxlength="30">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">correo</label>
        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" minlength="1" maxlength="30">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">telefono</label>
        <input type="number" class="form-control" onfocusout="validarEdad();" id="edad" required name="edad" step="1" min="1" max="120">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">pregunta de seguridad 1</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">Respuesta 1</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">pregunta de seguridad 2</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">Respuesta 2</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">pregunta de seguridad 3</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
      <div class="col col-xl-6 col-12">
        <label for="">Respuesta 3</label>
        <input type="text" class="form-control" required id="correo_electronico" name="correo_electronico" minlength="4" maxlength="255">
      </div>
    </div><br><br>
    <button type="submit" onclick="registrarPersona();" class="btn btn-primary">Envíar</button>
    <button type="submit" class="btn btn-dark">Limpiar</button>
    <!-- </form> -->
  </div>
</body>

</html>