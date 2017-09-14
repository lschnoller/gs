<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>css/reset-fonts-grids.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/sam_menu_2_8_1.css" />

<!-- SCRIPTS ARE IN FOOTER -->

<!--<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>-->

<style type="text/css">

</style>


</head>
<body>
<div id="doc2">
   <div id="hd">
     <div class="header-container"> 
      <a href="<?=base_url()?>" id="gs-logo"><img src="<?=base_url()?>design/logo-graciela-schnoller.png" title="Centro Graciela Schnoller" alt="Centro Graciela Schnoller" width="411" height="71" /></a>
      <div style="position:relative"><a href="<?=base_url()?>mba" id="mba-logo" style="margin-top: 1em;">&nbsp;METODO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIODINAMICA&nbsp;&nbsp;AYURVEDA</a></div>
     </div>
     <div class="header-container" style="height: 24px; padding-bottom:0">
       <div class="yui-g">
         <div class="yui-u first">
           <table style="margin-top:-.5em; margin-left:3em">
             <tr>
               <td class="borderright secondaryMenu"><a href="<?php echo base_url()?>">INICIO</a></td>
               <td class="borderright secondaryMenu"><a href="<?php echo base_url()?>nuestro_centro">NUESTRO CENTRO</a></td>
               <td class="borderright secondaryMenu"><a href="<?php echo base_url()?>equipo">EQUIPO</a></td>
               <td class="borderright secondaryMenu"><a href="<?php echo base_url()?>contactenos">CONTACTENOS</a></td>
               <td class="secondaryMenu"><a href="http://blog.biodinamica-ayurveda.com/">BLOG DE NOTAS!</a></td>               
               <!--<td class="secondaryMenu"><a href="<?php echo base_url()?>">LOGIN</a></td>-->
             </tr>
           </table>
         </div>
         <div class="yui-u">
           <!-- RIGHT MENU COMES HERE -->
         </div>
       </div>
     </div>
     <div id="big-image" style="background-image: url('<?php echo base_url()?>design/<?php echo $image?>')">       
      <?php
	   switch (strtolower($image)) 
		{
			case 'charlas_y_talleres.jpg':
				?>
				<div id="big-image-text" style="position: absolute; width: 300px; text-align: right; right: 2em; top: 4.5em;">
					<div class="big-image-title">Seminarios</div>
					<div class="big-image-subtitle">"El alma no es una meta lejana, sino un aspecto oculto del yo."</div>  
					<div class="big-image-author">Deepak Chopra</div>  
				</div>
				<?php
				break;
			
			//default:		
		}
		?>
       <!-- <div id="back-url">
         <a href="<?php echo base_url()?>">Inicio</a>
         >
         <a href="<?php echo base_url()?>">Cursos</a>
      </div> -->
      
      
       <div id="menucont">
         <div id="productsandservices" class="yuimenubar yuimenubarnav">
           <div class="bd">
             <ul id="main-menu" class="first-of-type">
               <li class="yuimenubaritem first-of-type topmenu "> <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'servicios') ? 'id="activemain"' : '';?> href="#">SERVICIOS</a></li>
               <li class="yuimenubaritem topmenu " style="margin-left: 6px;"> <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'ayurveda') ? 'id="activemain"' : '';?> href="#">AYURVEDA</a> </li>
               <li class="yuimenubaritem topmenu "  style="margin-left: 6px;"> <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'actividades' || $this->uri->segment(1) == 'testimonios') ? 'id="activemain"' : '';?>" href="#">ACTIVIDADES</a> </li>
             </ul>
           </div>
         </div>
       </div>
       
       <!--
       <form action="<?=base_url()?>/buscar/r" id="cse-search-box">
        <div id="buscar">
          <input type="hidden" name="cx" value="008828646780703459021:lchzyfmqjdk" />
          <input type="hidden" name="cof" value="FORID:10;" />
          <input type="hidden" name="ie" value="UTF-8" />
         <label>BUSCAR</label><input type="text" name="q" class="gsc-search-input" size="31" />
          <input type="submit" name="sa" class="gsc-search-button" value="" style="display: none"/> 
        </div>
      </form>
      <script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=es"></script>
      -->
      
     </div><!-- big image -->
   </div><!-- hd -->
