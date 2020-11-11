<?php
session_start();
$_SESSION['menu_act']=9;
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
          <h1><i class="fa fa-file-text-o"></i> Videos</h1>
          <p>Videos que ayudarán a capacitarte, tanto de cultivos como tecnología.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Capacitación</li>
          <li class="breadcrumb-item"><a href="#">Videos</a></li>
        </ul>
        
      </div>
      
      <div class="row">

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Permacultura</h3>
            <div class="tile-body">
              <center>
              <div class="video-responsive">
                <iframe src="https://www.youtube.com/embed/0eTDXmBFGgQ" frameborder="0" allowfullscreen></iframe>
              </div>
              </center>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Lago artificial para peces</h3>
            <div class="tile-body">
              <center>
              <div class="video-responsive">
                <iframe src="https://www.youtube.com/embed/zdZzXUSXSG8" frameborder="0" allowfullscreen></iframe>
              </div>
              </center>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Agricultura 4.0</h3>
            <div class="tile-body">
              <center>
              <div class="video-responsive">
                <iframe src="https://www.youtube.com/embed/WccvffGgDms" frameborder="0" allowfullscreen></iframe>
              </div>
              </center>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Robótica en cultivos</h3>
            <div class="tile-body">
              <center>
              <div class="video-responsive">
                <iframe src="https://www.youtube.com/embed/tSAlzuYd2ig" frameborder="0" allowfullscreen></iframe>
              </div>
              </center>
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