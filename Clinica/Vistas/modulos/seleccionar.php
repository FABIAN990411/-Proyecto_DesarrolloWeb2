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

     
      <div class="container">

      <div class="abs-center center">

        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #EEEEEE; color: #000000;">
            <div class="inner">
              <h3>Doctor</h3>

              <p>Inicie Sesión</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <a href="ingreso-Doctor" class="small-box-footer" style="background-color: #05595B; color: #FFFFFF;">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #EEEEEE; color: #000000;">
            <div class="inner">
              <h3>Paciente</h3>

              <p>Inicie Sesión</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="ingreso-Paciente" class="small-box-footer" style="background-color: #05595B; color: #FFFFFF;">Ingresar <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 
      </div>
      </div>
    </div>
    <!-- /.row -->

  </div><br><br><br><br>  
  <!-- /.container -->

  <!-- Footer -->
  <footer class="footer bg-primary">
    <div class="container">
      <h4 class="pfotter text-center text-white"><strong>Copyright &copy; Your Website 2022</strong></h4>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<style>
  .footer {
    margin-top: 45px;
  }
  .center {
    display: flex;
    justify-content: center;
  }
</style>