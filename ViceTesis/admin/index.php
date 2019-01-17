<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login | Vicerrectrado Web</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Perfil de la empresa">
    <meta name="keywords" content="http://unjfsc.edu.pe/" />

    <!-- imagen en el titulo -->
    <link rel="shortcut icon" href="../images/logo.png" />

    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="login-page bg-login">
    <div class="login-box">
      <div style="color:#00a65a" class="login-logo">
        <img src="../images/logo.png" width="270">
      </div><!-- /.login-logo -->
      
      <?php  

      if (empty($_GET['alert'])) {
        echo "";
      } 
      elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-times-circle'></i> Login Falló!</h4>
                Nombre de usuario o contraseña incorrectos, vuelva a comprobar su nombre de usuario o contraseña.
              </div>";
      }
      elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
                Ha cerrado la sesión con éxito.
              </div>";
      }
      ?>

      <div class="login-box-body">
        <p class="login-box-msg"><i class="fa fa-users icon-title"></i> Inicio de sesión</p>
        <br/>
        <form action="login-check.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Usuario" required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <br/>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Ingresar al sistema" />
            </div><!-- /.col -->
          </div>
        </form>

      </div>
    </div>

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>



    <?php 
      require_once "../config/database.php";
      $query = mysqli_query($mysqli, "SELECT user_id,username,password FROM is_user ")
                  or die('datos no encontrados: '.mysqli_error($mysqli));
    $data  = mysqli_fetch_assoc($query);
      var_dump($data);
        
 ?>



  </body>
</html>