<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro - Aguaca-Tech</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <i class="fa fa-lg fa-fw fa-user"></i><h1>Registro</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="../dashboard.php">
          <div class="form-group">
            <label class="control-label">Correo</label>
            <input class="form-control" type="email" placeholder="Ingresar Correo" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <label class="control-label">Repetir Contraseña</label>
            <input class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Soy Productor
                    </label>
                  </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Registrarse</button>
          </div>
          <div class="form-group btn-container">
            <a href="http://aguacatech.demowmx.com"><i class="fa fa-arrow-circle-left fa-lg fa-fw"></i>Regresar a Aguacatech</a>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main1.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>