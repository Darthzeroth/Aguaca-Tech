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
          <p>Listas de publicaciones de apoyo o asesoría que ofrecen productores.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productores</li>
          <li class="breadcrumb-item"><a href="#"> Publicaciones</a></li>
        </ul>
       
      </div>
     
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable" style="text-align:center;">
                  <thead>
                    <tr>
                      <th>Fecha</th>
                      <th>Productor</th>
                      <th>Titulo</th>
                      <th>Imagen</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>24/10/2020</td>
                      <td>Juan González</td>
                      <td>¡Consejos sobre el manejo del suelo!</td>
                      <td><img src="../assets/images/manejoSuelo.jpg" class="img-thumbnail medianaZeroTable"></td>
                      <td><a href="detallePublicacion.php" class="btn btn-warning">Ver detalle</a></td>
                    </tr>
                    <tr>
                      <td>09/10/2020</td>
                      <td>Oscar Mena</td>
                      <td>¡Apicultura!</td>
                      <td><img src="../assets/images/apicultura.jpg" class="img-thumbnail medianaZeroTable"></td>
                      <td><a class="btn btn-warning">Ver detalle </a></td>
                    </tr>
                    <tr>
                      <td>10/11/2020</td>
                      <td>Juan González</td>
                      <td>¡Métodos de obtención de agua!</td>
                      <td><img src="../assets/images/captaAgua.jpg" class="img-thumbnail medianaZeroTable"></td>
                      <td><a class="btn btn-warning">Ver detalle</a></td>
                    </tr>
                    <tr>
                      <td>15/10/2020</td>
                      <td>Eunice Cruz</td>
                      <td>¡Consejos sobre la permacultura!</td>
                      <td><img src="../assets/images/permacultura_1.jpg" class="img-thumbnail medianaZeroTable"></td>
                      <td><a class="btn btn-warning">Ver detalle</a></td>
                    </tr>
                    <tr>
                      <td>11/05/2020</td>
                      <td>Juan González</td>
                      <td>¡Control de plagas!</td>
                      <td><img src="../assets/images/controlplaga.jpg" class="img-thumbnail medianaZeroTable"></td>
                      <td><a class="btn btn-warning">Ver detalle</a></td>
                    </tr>
                    
                  </tbody>
                </table>
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