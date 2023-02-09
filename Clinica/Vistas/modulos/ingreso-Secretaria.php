<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>


<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Curar</b>Sahagún</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar como Secretaria</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" name="usuario-Ing" placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" name="clave-Ing" placeholder="Contraseña"
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y al menos 8 o más caracteres">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">
       
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

      $ingreso = new SecretariasC();
      $ingreso -> IngresarSecretariaC();

      ?>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
  
</body>
</html>