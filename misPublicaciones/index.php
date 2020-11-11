<?php
session_start();
$_SESSION['menu_act']=5;
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
          <h1><i class="fa fa-file-text-o"></i> Mis Publicaciones</h1>
          <p>Listas de publicaciones de cosas que ofreces como apoyo a otros productores.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productores</li>
          <li class="breadcrumb-item"><a href="#">Mis Publicaciones</a></li>
        </ul>
        <br><center><div class="text-center">
            <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Nueva Publicación</a>
          </div></center>
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
            <h3 class="tile-title">¡Métodos de obtención de agua!</h3>
            <div class="tile-body">
              <p><h6>Te puedo dar consejos de como obtener agua de lluvia.</h6></p>
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
                    <img src="../assets/images/captaAgua.jpg" class="img-thumbnail medianaZero">
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Control de plagas!</h3>
            <div class="tile-body">
              <p><h6>Te puedo dar consejos de como manejar las plagas.</h6></p>
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
                    <img src="../assets/images/controlplaga.jpg" class="img-thumbnail medianaZero">
                  </div>
                </div>
              </center>
            </div>
          </div>
        </div>

        
        
        
      </div>
      
    </main>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Nueva Publicación</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fa fa-text-width prefix grey-text"></i> Titulo
              <input type="text" id="defaultForm-email" class="form-control validate">
              <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
            </div>

            <div class="md-form mb-4">
              <i class="fa fa-align-center grey-text"></i> Descripción breve
              <input type="text" id="defaultForm-pass" class="form-control validate">
              <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
            </div>
            <div class="md-form mb-4">
              <i class="fa fa-file-image-o grey-text"></i> Subir foto <br/>
              <input type="file" id="myfile" name="myfile">
              <label data-error="wrong" data-success="right" for="defaultForm-pass"></label>
            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i>Publicar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Essential javascripts for application to work-->
    <?php
    include('../tools/scriptDash.php');
    ?>
    
    
  </body>
</html>