<?php
session_start();
$_SESSION['menu_act']=6;
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
    <!-- Main CSS--><link rel="stylesheet" type="text/css" href="../assets/css/estilo_mensajeria.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	
	
	
	<!-- Estilo de la mensajeria!!!! -->
	
	
	
	
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
          <h1><i class="fa fa-file-text-o"></i> Mensajes</h1>
            <p>Historial de mensajes con los productores que has contactado.</p>

        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productores</li>
          <li class="breadcrumb-item"><a href="#"> Mensajes</a></li>
        </ul>
       
      </div>
     
      <div class="row">
        <div class="tile">
            <h3 class="tile-title"></h3>
			<div class="messaging">
			  <div class="inbox_msg">
				<div class="inbox_people">
				  <div class="headind_srch">
					<div class="recent_heading">
					  <h4>Recientes</h4>
					</div>
					<div class="srch_bar">
					  <div class="stylish-input-group">
						<input type="text" class="search-bar"  placeholder="Buscar" >
						<span class="input-group-addon">
						<button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
						</span> </div>
					</div>
				  </div>
				  <div class="inbox_chat">
					<div class="chat_list active_chat">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Juan Perez<span class="chat_date">Hoy</span></h5>
						  <p>Buen día!</p>
						</div>
					  </div>
					</div>
					
					<div class="chat_list">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Fernando Ochoa<span class="chat_date">Nov 8</span></h5>
						  <p>Lo visito mañana, buen día</p>
						</div>
					  </div>
					</div>
					<div class="chat_list">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Carlos Mejía<span class="chat_date">Nov 7</span></h5>
						  <p>Si pudiera le mando los 4</p>
						</div>
					  </div>
					</div>
					<div class="chat_list">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Alejandra Hernandez<span class="chat_date">Nov 5</span></h5>
						  <p>Buen día :)</p>
						</div>
					  </div>
					</div>
					<div class="chat_list">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Elawa Catero<span class="chat_date">Nov 5</span></h5>
						  <p>Buenas tardes, quisiera ponerme en contacto con usted...</p>
						</div>
					  </div>
					</div>
					<div class="chat_list">
					  <div class="chat_people">
						<div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
						<div class="chat_ib">
						  <h5>Gabriel Bestwing<span class="chat_date">Nov 3</span></h5>
						  <p>Ok, quisiera saber si hace exportaciones del producto certificado</p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
				<div class="mesgs">
				  <div class="msg_history">
					<div class="incoming_msg">
					  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
					  <div class="received_msg">
						<div class="received_withd_msg">
						  <p>Buenas, para avisarle que apliqué a los árboles plagados la solución que me dijo que comprara. Me funcionó perfecto!</p>
						  <span class="time_date"> 10:41 AM    |    Hoy</span></div>
					  </div>
					</div>
					<div class="outgoing_msg">
					  <div class="sent_msg">
						<p>Qué bueno que le sirvió, un gusto haberle ayudado</p>
						<span class="time_date"> 10:56 AM    |    Hoy</span> </div>
					</div>
					<div class="incoming_msg">
					  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
					  <div class="received_msg">
						<div class="received_withd_msg">
						  <p>Muchas gracias, en lo que yo pueda ayudarle también, aquí seguimos</p>
						  <span class="time_date"> 11:00 AM    |    Hoy</span></div>
					  </div>
					</div>
					<div class="outgoing_msg">
					  <div class="sent_msg">
						<p>Gracias a usted. Que tenga buen día!</p>
						<span class="time_date"> 11:01 AM    |    Hoy</span> </div>
					</div>
					<div class="incoming_msg">
					  <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="aguacatech"> </div>
					  <div class="received_msg">
						<div class="received_withd_msg">
						  <p>Buen día!</p>
						  <span class="time_date"> 11:01 AM    |    Hoy</span></div>
					  </div>
					</div>
				  </div>
				  <div class="type_msg">
					<div class="input_msg_write">
					  <input type="text" class="write_msg" placeholder="Escribe un mensaje" />
					  <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
					</div>
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
   	
    
  </body>
</html>