<?php
session_start();
$_SESSION['menu_act']=1;
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
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar y header-->
    <?php include('tools/headerDash.php');?>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include('tools/leftNav.php');?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Bienvenido Usuario</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Valida tu zona y se acreedor de tu certificado! <i class="fa fa-file-text-o" aria-hidden="true"></i></h3>
            <div class="tile-body">
              <p>Tener una zona de cultivo de aguacate certificada, otorgará a tu producto un valor único y por encima de cualquier otra producción de aguacate.</p>
              <p>Los datos requeridos son físicos, que sirven para verificar si cumplen con la norma.</p>
              <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Esto lo puedes hacer accediendo en el menú lateral <b>Evaluación.</b> </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Red de contacto entre productores de la zona! <i class="fa fa-users" aria-hidden="true"></i></h3>
            <div class="tile-body">
              <p>Si tienes alguna duda o quisieras que te asesoren, puedes ver los consejos que otros productores publican en la plataforma.</p>
              <p></p>
              <p>De igual manera puedes dar consejos a dudas de otros productores. </p>
              <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Esto lo puedes hacer accediendo en el menú lateral <b>Productores.</b> </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Promueve la venta y ofrece trabajo! <i class="fa fa-handshake-o" aria-hidden="true"></i></h3>
            <div class="tile-body">
              <p>Ofrece y vende tu cosecha a los usuarios de la plataforma.</p>
              
              <p>Si tienes vacantes o solicitas mano de obra, publicalo, de esta manera apoyas a la economía local. </p>
              <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Esto lo puedes hacer accediendo en el menú lateral <b>Promoción.</b> </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">¡Capacítate! <i class="fa fa-graduation-cap" aria-hidden="true"></i></h3>
            <div class="tile-body">
              <p>Podrás encontrar videos que te ayudarán a mejorar tu zona de cultivo o para ayudarte a entender la tecnología.</p>
              
              <p>Visualiza y descarga información que te ayudará en tu proceso de capacitación.</p>
              <p><i class="fa fa-arrow-left" aria-hidden="true"></i> Esto lo puedes hacer accediendo en el menú lateral <b>Capacitación.</b> </p>
            </div>
          </div>
        </div>
        
        
        
        
      </div>
      
    </main>
    <?php include('tools/scriptDash.php'); ?>
    
    
  </body>
</html>