<?php
session_start();
$_SESSION['menu_act']=4;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Aguaca-Tech!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar y header-->
    <?php include('../tools/headerDash.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('../tools/leftNav.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Publicaciones</h1>
          <p>Listas de publicaciones de cosas que ofreces como apoyo a otros productores.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productores</li>
          <li class="breadcrumb-item"><a href="#"> Publicaciones</a></li>
        </ul>
       
      </div>
     
      <div class="row">
          <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Consejos sobre el manejo del suelo!</h3>
            <div class="tile-body">
              <p><h6>Te puedo dar consejos de como manejar el suelo para tener un mejor rendimiento.</h6></p>
              <center>
                <div class="row">
                  <div class="col-md-6">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; 2211664671 </p>
                  </div>
                  <div class="col-md-6">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; Av. Revolución 204</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p><img class="app-sidebar__user-avatar" src="../assets/images/na1.jpg" alt="User Image"><b>Juan González</b></p>
                  </div>
                  <div class="col-md-6">
                    <img src="../assets/images/manejoSuelo.jpg" class="img-thumbnail medianaZero">
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>
          
          <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Deja un mensaje!</h3><br>&nbsp;<br><br>
            <div class="tile-body">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label class="control-label col-md-3"><b>Mensaje:</b></label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Deja tu comentario o duda"></textarea>
                  </div>
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enviar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </main>

 
    <!-- Essential javascripts for application to work-->
    <?php
    include('../tools/scriptDash.php');
    ?>
    <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
  </body>
</html>