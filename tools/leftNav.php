<?php 
session_start();
?>
<aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../assets/images/na1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Juan</p>
          <p class="app-sidebar__user-designation">Productor</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item <?php if($_SESSION['menu_act']==1){echo 'active';}?>" href="../dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview <?php if($_SESSION['menu_act']==2||$_SESSION['menu_act']==3){echo 'is-expanded';}?>"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Evaluación</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==2){echo 'active';}?>" href="/validarZona"><i class="icon fa fa-line-chart"></i> Validar Zona</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==3){echo 'active';}?>" href="/estatusZonas"><i class="icon fa fa-tasks"></i> Estatus</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($_SESSION['menu_act']==4||$_SESSION['menu_act']==5||$_SESSION['menu_act']==6){echo 'is-expanded';}?>"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Productores</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==4){echo 'active';}?>" href="/publicaciones" ><i class="icon fa fa-list-ol"></i> Publicaciones</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==5){echo 'active';}?>" href="/misPublicaciones"><i class="icon fa fa-file-text-o"></i> Mis Publicaciones</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==6){echo 'active';}?>" href="/Mensajes"><i class="icon fa fa-commenting"></i> Mensajes</a></li>

          </ul>
        </li>
        <li class="treeview <?php if($_SESSION['menu_act']==7||$_SESSION['menu_act']==8){echo 'is-expanded';}?>"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-balance-scale"></i><span class="app-menu__label">Promoción</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==7){echo 'active';}?>" href="/Empleo"><i class="icon fa fa-user-plus"></i> Empleo</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==8){echo 'active';}?>" href="/Ventas"><i class="icon fa fa-cart-plus"></i> Venta</a></li>
          </ul>
        </li>
        <li class="treeview <?php if($_SESSION['menu_act']==9||$_SESSION['menu_act']==10||$_SESSION['menu_act']==11){echo 'is-expanded';}?>"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Capacitación</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==9){echo 'active';}?>" href="/capVideos"><i class="icon fa fa-play"></i> Videos</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==10){echo 'active';}?>" href="/capDocumentos"><i class="icon fa fa-file-pdf-o"></i> Documentos</a></li>
            <li><a class="treeview-item <?php if($_SESSION['menu_act']==11){echo 'active';}?>" href="/Certificacion"><i class="icon fa fa-pencil-square"></i> Certificación</a></li>
          </ul>
        </li>
      </ul>
    </aside>
