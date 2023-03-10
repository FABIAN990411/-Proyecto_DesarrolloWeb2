<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="post" role="form">

        <div class="modal-body">

          <div class="box-body">

            <div class="form-group">


              <input type="text" class="form-control input-lg" placeholder="apellido" name="apellido" required>

              <input type="hidden" name="rolP" value="Paciente">

            </div>

            <div class="form-group has-feedback">

              <input type="text" class="form-control input-lg" placeholder="Nombre" name="nombre" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">

              <input type="text" class="form-control input-lg" placeholder="Documento" name="documento" required>

            </div>

            <div class="form-group has-feedback">

              <input type="text" class="form-control input-lg" placeholder="Usuario" id="usuario" name="usuario" required>
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">

              <input type="password" class="form-control input-lg" placeholder="Contrase??a" name="clave" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            </div>

          </div>

        </div>


        <div class="modal-footer">

          <button type="submit" class="btn btn-block btn-primary">Crear</button>


        </div>



      </form>


      <a href="ingreso-Paciente" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    <?php

    $crear = new PacientesC();
    $crear->CrearPacienteC();

    ?>
  </script>
</body>

</html>