<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once('librerias.php'); ?>
</head>
<body>
  <div class="container my-5 ">
    <h1>Inicio de seccion</h1>
  <div class="row ">
  <label for="exampleFormControlInput1" class="form-label">Usuario</label>
  <input type="email" class="form-control" id="usuario" placeholder="brayan mosquera">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
  <input type="password" id="password" class="form-control">
  <a class="btn btn-primary m-2">Iniciar</a>
  <a href="recuperar.php" class="text-center text-success">olvide mi contraseña</a>
</div>
  </div>
</body>
</html>