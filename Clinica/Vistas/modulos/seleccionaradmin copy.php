<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Business Frontpage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body>
  <?php
  include "navbar.php";
  ?><br><br><br><br><br>
  <!-- Page Content -->


  <div class="">

    <div class="container">

      <div class="row">
       
        <div class="col-md-12 mb-5">
          <?php 
        $inicio = new InicioC();
        $inicio -> MostrarInicioC();

        ?>
        </div>
      </div><br><br>
      <!-- /.row -->

      <div class="row">
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #F781D8; color: white;">
            <div class="inner">
              <h3>Secretaria</h3>

              <p>Inicie Sesión</p>
            </div>
            <div class="icon">
              <i class="fa fa-female"></i>
            </div>
            <a href="ingreso-Secretaria" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-5 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Administrador</h3>

              <p>Inicie Sesión</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
            <a href="ingreso-Administrador" class="small-box-footer">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

    </div>
    <!-- /.row -->

  </div><br><br><br><br>  
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-primary">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>