<?php
session_start();
$_SESSION['menu_act']=7;
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
          <h1><i class="fa fa-file-text-o"></i> Empleo</h1>
          <p>Listas de publicaciones de empleo que ofrecen otros productores.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Promoción</li>
          <li class="breadcrumb-item"><a href="#">Empleo</a></li>
        </ul>
        <br><center><div class="text-center">
            <a href="" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalLoginForm">Nueva Publicación</a>
          </div></center>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable" style="text-align:center;">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Fecha</th>
                      <th>Productor</th>
                      <th>Descripción</th>
                      <th>Teléfono</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>10/11/2020</td>
                      <td>Juan González</td>
                      <td><b>Solicito Apicultores</b></td>
                      <td>2211664671</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>09/11/2020</td>
                      <td>Oscar Mena</td>
                      <td><b>Solicito gente para pizca</b></td>
                      <td>2211664585</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>1/11/2020</td>
                      <td>Juan González</td>
                      <td><b>Solicito experto en suelos</b></td>
                      <td>2211664671</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>15/10/2020</td>
                      <td>Eunice Cruz</td>
                      <td><b>Solicito jornalero</b></td>
                      <td>2213685546</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>11/05/2020</td>
                      <td>Juan González</td>
                      <td><b>Solicito plaguicida</b></td>
                      <td>221166471</td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>        
      
      
    </main>

    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Nueva Oferta de Empleo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fa fa-text-width prefix grey-text"></i> &nbsp;Descripción breve:
              <input type="text" id="defaultForm-email" class="form-control validate">
              <label data-error="wrong" data-success="right" for="defaultForm-email"></label>
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
    <script type="text/javascript" src="../assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    
  </body>
</html>