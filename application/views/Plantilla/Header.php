	<!DOCTYPE html>  <!--Para Que cargen los estilos css -->
	<html lang="en"> <!--Para Que sea idioma en español -->
	<head>
	<meta charset="utf-8"> <!--Para Que cargen acentos y caracteres especiales -->
	<meta name="viewport" content="width= , user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><!-- para los dispositivos moviles -->
	<html>
		<title><?php echo$titulo ?> / INTRAIAPPEF</title>

	<link href="<?php echo base_url(); ?>/estilos/css/bootstrap.min.css" rel="stylesheet"> <!-- carga de los estilos -->
	  <script src="<?php echo base_url(); ?>/estilos/js/jquery-3.2.1.min.js"></script> <!-- carga del scrip para la toma de la hora -->
		<script src="<?php echo base_url(); ?>/estilos/js/main.js"></script> <!-- carga del scrip para la toma de la hora -->
	</head>
			<div class="container1">
						<div id="fecha" class="pull-right" style="margin-right: 8px; color: #black; margin-top: 45px;"> 
							<script type="text/javascript" > 
								function startTime() {
   									var today = new Date();
    								var hr = today.getHours();
    								var min = today.getMinutes();
    								var sec = today.getSeconds();
    								ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
    								hr = (hr == 0) ? 12 : hr;
    								hr = (hr > 12) ? hr - 12 : hr;
    								//Add a zero in front of numbers<10
    								hr = checkTime(hr);
    								min = checkTime(min);
    								sec = checkTime(sec);
    								document.getElementById("clock").innerHTML = hr + " : " + min + " : " + sec + " " + ap;
    								var time = setTimeout(function(){ startTime() }, 500);
									}
								function checkTime(i) {
							    	if (i < 10) {
							    	    i = "0" + i;
							    	}
							    	return i;
									}
							</script>
							<script type="text/javascript" > 
 									var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"); var f=new Date(); document.write(diasSemana[f.getDay()] + " " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); 
							</script><body onload="startTime()">
							<div id="clockdate">
  								<div class="clockdate-wrapper">
    							<div id="clock"></div>
								</div>
							</div>
 						</div>   


						<div align="center1">
  				        	<div id="contenedorg">
  				        		<div id="cabecera1"></div>
             						<div style="padding-top: 1px; padding-bottom: 0px;" id="cuerpo1">
            				         	<a class=" pull-leth col-md-1" >
        								<img style="height:70px; " class="hidden-sm hidden-xs" src="<?php echo base_url(); ?>/estilos/imagenes/iappef_logo.png" alt="">
    									</a> 
    										<center><h1>INTRAIAPPEF</h1></center>
            						</div><!-- fin contenedor -->
            			<div id="pie1"></div>
     						</div>
 						</div>
			
			<div class="menu_bar">
				<a href="#" class="btn_menu"><span class="icon-menu"></span>Menú</a>
			</div>

				<nav>
					
					<ul>

					<li title="INTRANAVE" ><a href="<?php echo base_url();?>Inicio "><span class="icon-home3"></span> Inicio</a></li>

					<li title="Gerencia General" > <a href="<?php echo base_url() ?>Usuariogg/"> PRES</a></li>

					<li title="Gerencia Aplicaciones Navales Especializadas" class="submenu"> 

					<a href="<?php echo base_url() ?>Gerencias/"> INFOR <span class="caret"></span></a> 

					<ul class="children">
							<li><a href="<?php echo base_url(); ?>Formulario">Reporte</a></li>
							<li><a href="<?php echo base_url(); ?>usuario">Usuario</a></li>
								
					</ul>

					</li>

					<li class="submenu" title="Gerencia Mantenimiento de Planta" ><a href="<?php echo base_url() ?>Gerencias/mtto"> FACT <span class="caret"></span> </a>

					<ul class="children">
							<li><a href="<?php echo base_url(); ?>Formulariomtto">Reporte</a></li>
							<li><a href="<?php echo base_url(); ?>usuariom">Usuario</a></li>
							
					</ul>

					</li>

			
				

					</ul>
				</nav>
	</header>