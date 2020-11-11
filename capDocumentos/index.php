<?php
session_start();
$_SESSION['menu_act']=10;
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
          <h1><i class="fa fa-file-text-o"></i> Documentos</h1>
          <p>Documentos que ayudarán a capacitarte, tanto de cultivos como tecnología.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Capacitación</li>
          <li class="breadcrumb-item"><a href="#">Documentos</a></li>
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
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Tema</th>
                      <th>Resumen</th>
                      <th>Visualizar / Descargar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Apicultura como apoyo al cultivo</td>
                      <td>Apicultura</td>
                      <td>La apicultura es una técnica que consiste en crear cuidades de abejas ... </td>
                      <td><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#modalLoginForm"></i> &nbsp; &nbsp; <i class="fa fa-download fa-2x" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Acuaponia: Una inversión doble beneficio</td>
                      <td>Acuaponia</td>
                      <td>La acuaponia es una técnica donde se utilizan peces para ...</td>
                      <td><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#modalLoginForm"></i>  &nbsp; &nbsp; <i class="fa fa-download fa-2x" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cosecha de aguacates</td>
                      <td>Aguacates</td>
                      <td>Los aguacates son frutos que se cosechan en ...</td>
                      <td><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#modalLoginForm"></i> &nbsp; &nbsp; <i class="fa fa-download fa-2x" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Apicultura como apoyo al cultivo</td>
                      <td>Apicultura</td>
                      <td>La apicultura es una técnica que consiste en crear cuidades de abejas ... </td>
                      <td><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true" data-toggle="modal" data-target="#modalLoginForm"></i> &nbsp; &nbsp; <i class="fa fa-download fa-2x" aria-hidden="true"></i></td>
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
            
            <embed src="filesPDF/Aguaca-Tech.pdf#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height="600px" />
            

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