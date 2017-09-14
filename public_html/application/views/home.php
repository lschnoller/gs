<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title><?php echo $title?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/reset-fonts-grids.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">
   <style type="text/css">
	#mba-logo{
		background-image:url("../design/mba-logo2.png");
		background-repeat:no-repeat;
		display:block;
		position: absolute; 
		top: .3em; 
		right: -15px;
		font-size:14px;
		height:74px;
		padding-top:4.5em;
		width:274px;
		text-shadow:1px 1px 3px #aaa;
	}
   </style>
   
</head>

<body>
<div id="doc2">					
	<div id="hd">
		<div style="height: 74px; width:95%; padding:1em">
			<a href="<?=base_url()?>" id="gs-logo"><img src="<?=base_url()?>design/logo-graciela-schnoller.png" title="Centro Graciela Schnoller" alt="Centro Graciela Schnoller" width="411" height="71" /></a>
			<div style="position:relative"><a href="<?=base_url()?>mba" id="mba-logo" style="margin-top: 1em;">&nbsp;&nbsp;METODO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIODINAMICA&nbsp;&nbsp;&nbsp;&nbsp;AYURVEDA</a></div>
         <!--<a href="<?php base_url()?>mba" id="mba-logo" style="margin-top:2em;">&nbsp;</a>-->
         
		</div>
		<?php 
			$number = date('s')%3 +1;
			
		?>
		<div id="home-image" style="background-image: url('<?php echo base_url()?>design/home<?=$number?>.jpg')">
			<div class="c90" style="height: 24px;">
				<div class="yui-g"> 
				   <div class="yui-u first">
				   <table>
				   	<tr>
				   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>">INICIO</a></td>
				   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>nuestro_centro">NUESTRO CENTRO</a></td>
				   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>equipo">EQUIPO</a></td>
				   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>contactenos">CONTACTENOS</a></td>
				   		<td class="secondaryMenu"><a href="http://blog.biodinamica-ayurveda.com/">BLOG DE NOTAS!</a></td>
				   	</tr>
				   </table>
				   </div>
				   <div class="yui-u">
				   	<!-- SPACE -->
				   </div>
				</div> 
			</div>
		</div>
		<div class="hometabscont">
			<div class="yui-gb">
				<div class="yui-u first">
					<div class="hometab hometab1">
               	<div class="hometab-header">SERVICIOS</div>
						<div><a href="<?php echo base_url()?>servicios/counseling" class="green">COUNSELING</a></div>
						<div><a href="<?php echo base_url()?>servicios/cursos" class="green">CURSOS</a></div>
						<div><a href="<?php echo base_url()?>servicios/seminarios" class="green">SEMINARIOS Y TALLERES</a></div>
						<div><a href="<?php echo base_url()?>servicios/cosmetica_y_tratamientos" class="green">TRATAMIENTOS Y COSMÉTICA</a></div>
					</div>
				</div>
				<div class="yui-u">
					<div class="hometab hometab2">
               	<div class="hometab-header">AYURVEDA</div>
						<div><a href="<?php echo base_url()?>ayurveda/consulta" class="green">CONSULTA AYURVEDICA</a></div>
						<div><a href="<?php echo base_url()?>ayurveda/tecnicas_de_meditacion" class="green">TÉCNICAS DE MEDITACIÓN</a></div>
						<div><a href="<?php echo base_url()?>ayurveda/masaje_ayurvedico" class="green">MASAJE AYURVÉDICO</a></div>
						<div><a href="<?php echo base_url()?>ayurveda/el_camino_del_instructor" class="green">EL CAMINO DEL INSTRUCTOR</a></div>
					</div>
				</div>
				<div class="yui-u">
					<div class="hometab hometab3">
               	<div class="hometab-header">ACTIVIDADES</div>
						<div><a href="<?php echo base_url()?>actividades/calendario" class="green">CALENDARIO DE ACTIVIDADES</a></div>					
                  <div><a href="http://blog.biodinamica-ayurveda.com" class="green">PUBLICACIONES Y NOTICIAS</a></div>
						<div><a href="<?php echo base_url()?>actividades/formacion_a_distancia" class="green">FORMACIÓN A DISTANCIA</a></div>
                  <div><a href="<?php echo base_url()?>testimonios" class="green">TESTIMONIOS</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="bd">
		<div class="c90">		
			<div class="yui-gb"> 
				<div class="yui-u first">
					<p class="intro-text" style="padding-right:.8em">Desde este enfoque, te brindamos numerosas actividades para acompañar tu camino hacia el equilibrio físico y energético, liberación emocional y desarrollo espiritual. </p>
				</div>
				<div class="yui-u ">
					<p class="intro-text">Nuestros programas incluyen counseling, técnicas de meditación, masaje Ayurveda, tratamientos holísticos, cursos, talleres temáticos y capacitación de instructores. </p>
				</div>
				<!--<div class="yui-u" onMouseOver="YAHOO.util.Dom.addClass(this, 'mba-over');" onMouseOut="YAHOO.util.Dom.removeClass(this, 'mba-over');" onClick="window.location ='<?=base_URL().'mba'?>'" style="cursor:pointer; text-shadow:3px 3px 9px #ff6600; color:#ff9900">-->
            <div class="yui-u" onClick="window.location ='<?=base_URL().'mba'?>'" style="cursor:pointer; text-shadow:3px 3px 9px #ff6600; color:#ff9900">
					<h2 style="padding-left: 1em;margin-bottom: .2em;">QUE ES</h2>
					<h2 style="padding-left: .1em;margin-bottom: .2em;">EL METODO</h2>
					<h2 style="padding-left: 2em;margin-bottom: .2em;">BIODINAMICA</h2>
					<h2 style="padding-left: .8em;margin-bottom: .2em;">AYURVEDA?</h2>
				</div>
			</div>
		</div>
	</div>
	<div id="ft">
		<div class="yui-gb"> 
			<div class="yui-u first">
				<a href="#"><img src="<?php echo base_url()?>design/homeimg1.png"/></a>
			</div>
			<div class="yui-u al">
				<h4 class="al">Cual es tu dosha?</h4>
				<p style="width: 90%;margin-left: 0">Según el Ayurveda, la base material del universo está compuesta por los cinco elementos: fuego, tierra, agua, aire y eter. Al combinarse dan origen a tres doshas principales que constituyen tu naturaleza psico-fisica: Vata (Éter y Aire), Pitta (Fuego y Agua), Kapha (Agua y Tierra). Descubri cual es tu dosha <a class="orange" href="<?php echo base_url()?>">haciendo click aquí.</a>
				</p>
			</div>
			<div class="yui-u">
				<a href="#"><img src="<?php echo base_url()?>design/homeimg2.png"/></a>
			</div>
		</div>
	</div>
</div>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
	
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-16718674-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>


<!-- p6.ydn.sp1.yahoo.com compressed/chunked Fri Apr 23 06:38:12 PDT 2010 -->
