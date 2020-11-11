<?php
session_start();
$_SESSION['menu_act']=2;
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
          <h1><i class="fa fa-line-chart"></i> Validar Zona</h1>
          <p>Registra los datos solicitados para evaluar tu zona de cultivo.</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Evaluación</li>
          <li class="breadcrumb-item"><a href="#">Validar Zona</a></li>
        </ul>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Validar huerto</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Nombre del productor:</label>
                  <input class="form-control" disabled="disabled" type="text" value="Juan González" placeholder="Enter full name">
                </div>
                <div class="form-group">
                  <label class="control-label">¿Cuales son las medidas de tu zona de cultivo?</label>
                  <input class="form-control" type="text" placeholder="Ingrese medidas en metro cuadrado ej: 100x80m2">
                </div>
                <div class="form-group">
                  <label class="control-label">¿Qué tipo de suelo tienes?</label>
                    <select class="form-control" id="exampleSelect1">
                      <option selected disabled>Seleccione una opción</option>
                      <option>Limoso</option>
                      <option>Arcilloso</option>
                      <option>Arenoso</option>
                      <option>Salino</option>
                      <option>Turba</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">¿Qué pendiente/inclunación tiene su terreno?</label>
                    <select class="form-control" id="exampleSelect1">
                      <option selected disabled>Seleccione una opción</option>
                      <option>Plano-Nivel</option>
                      <option>Ligeramente inclinada</option>
                      <option>Moderadamente inclinada</option>
                      <option>Quebrada</option>
                      <option>Moderadamente escarpada</option>
                      <option>Fuertemente escarpada</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">¿Cuenta con zonas planas?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">Si
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender">No
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">¿Cuenta con algún cuerpo de acua cercano? (Rio, lago, riachuelo, pozo, etc.)?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender1">Si
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender1">No
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">¿Cantidad de lluvia al año?</label>
                    <select class="form-control" id="exampleSelect1">
                      <option selected disabled>Seleccione una opción</option>
                      <option>Menos de 25,000 milimetros</option>
                      <option>Entre 25,000 a 50,000 milimetros</option>
                      <option>Más de 50,000</option>
                    </select>
                </div>
                <div class="form-group">
                  <label class="control-label">Temperatura de la zona:</label>
                    <select class="form-control" id="exampleSelect1">
                      <option selected disabled>Seleccione una opción</option>
                      <option>Menor a 10°</option>
                      <option>10° a 16°</option>
                      <option>17° a 23°</option>
                      <option>24° a 27°</option>
                      <option>28° a 33°</option>
                      <option>Mayor A 33°</option>
                    </select>
                </div>

                <div class="form-group">
                  <label class="control-label">¿Cuenta con árboles endémicos de la región dentro y en zoñas aledañas?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender2">Si
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender2">No
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">¿Cuenta con fauna endémica?</label>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender3">Si
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender3">No
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Suba una foto del terreno para evaluarlo visualmente:</label>
                  <input class="form-control" type="file">
                </div>
              </form>
            </div>
            <div class="tile-footer">
              <a href="../estatusZonas" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enviar</a>
            </div>
          </div>
        </div>
        
        
      </div>
      
    </main>
    <!-- Essential javascripts for application to work-->
    <?php
    include('../tools/scriptDash.php');
    ?>
    
    
  </body>
</html>