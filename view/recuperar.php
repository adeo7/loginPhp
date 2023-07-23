<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recupera tu contraseña</title>
    <?php require_once('librerias.php');?>
</head>
<body>
    <h1>Recupera tu contraseña</h1>
    <div class="container">
    <div class="row">
    <div class="col col-xl-6 col-12">
        <label for="">Usuario</label>
        <input type="text" class="form-control" required  minlength="1" maxlength="30">
        <label for="">responde la sigiente pregunta de seguridad </label>
        <br><br>
        <h5>pregunta de seguridad</h5>
        <select class="form-select" aria-label="Default select example" name="tipoIdentifiacion" id="tipo" onfocusout="validarTipo();">
                        <option selected>selecione la respuesta correcta</option>
                        <option value="cc">respuesta </option>
                        <option value="ti">respuesta</option>
                        <option value="ce">respuesta</option>
                        </select>
        <h5>pregunta de seguridad</h5>
        <select class="form-select" aria-label="Default select example" name="tipoIdentifiacion" id="tipo" onfocusout="validarTipo();">
                        <option selected>selecione la respuesta correcta</option>
                        <option value="cc">respuesta </option>
                        <option value="ti">respuesta</option>
                        <option value="ce">respuesta</option>
                        </select>
        <h5>pregunta de seguridad</h5>
        <select class="form-select" aria-label="Default select example" name="tipoIdentifiacion" id="tipo" onfocusout="validarTipo();">
                        <option selected>selecione la respuesta correcta</option>
                        <option value="cc">respuesta </option>
                        <option value="ti">respuesta</option>
                        <option value="ce">respuesta</option>
                        </select>
        <a class="btn btn-primary mt-3">Responder</a>
      </div>
    </div>
    </div>
</body>
</html>