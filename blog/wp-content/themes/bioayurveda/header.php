<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html <?php language_attributes(); ?>> 
<head> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>BIODINAMICA AYURVEDA BLOG <?php wp_title(); ?> <?php bloginfo('name'); ?></title> 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<link rel="stylesheet" href="http://www.biodinamica-ayurveda.com/css/reset-fonts-grids.css" type="text/css" /> 
<link rel="stylesheet" href="http://www.biodinamica-ayurveda.com/css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="http://www.biodinamica-ayurveda.com/css/sam_menu_2_8_1.css" /> 
 
<script type="text/javascript" src="http://www.biodinamica-ayurveda.com/js/prototype.js"></script> 
<script type="text/javascript" src="http://www.biodinamica-ayurveda.com/js/yahoo-dom-event.js"></script> 
<script type="text/javascript" src="http://www.biodinamica-ayurveda.com/js/animation-min.js"></script> 
<script type="text/javascript" src="http://www.biodinamica-ayurveda.com/js/container_core-min.js"></script> 
<script type="text/javascript" src="http://www.biodinamica-ayurveda.com/js/menu-min.js"></script> 
 
<!--<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>--> 
<style type="text/css"> 
.topmenu {
	background-image: url("http://biodinamica-ayurveda.com/design/menutop.png");
	background-repeat: no-repeat;
	width: 120px;
	height: 43px;
}
#menucont {
	position: absolute;
	left: 520px;
	top: -35px;
	width:500px;
}
.yuimenubaritem {
	margin:0 1em;
}
.yuimenubaritem a {
	text-align: center;
	padding-top: 7px;
	color: #9B9F04;
	font-size: 14px;
}
#main-menu {
	font:20px "Century Gothic", Arial, sans-serif, verdana;
	color:#D8DFB9;
	text-shadow:1px 1px 1px #D8DFB9;
	margin:.5em;
	background-color:transparent;
}
#main-menu li {
	margin:0 .5em;
}
.activesub a {
	color: #FF6600;
}
#activemain {
	color: #FF6600;
}
.first-of-type li {
}
.first-of-type li a:HOVER {
	color: #FF6600;
}
#servicios .bd ul, #ayurveda .bd ul, #actividades .bd ul {
	background-color:#fff;
	border:1px solid #D8DFB9;
	padding:.2em .5em;
	margin:0;
}
#servicios .bd ul li a, #ayurveda .bd ul li a, #actividades .bd ul li a {
	font:12px "Century Gothic", Arial, sans-serif, verdana;
}
/*.secondaryMenu {
	white-space:nowrap;
	font-size: 11px;
}
.secondaryMenu a {
	color:#777;
}*/
#mba-logo{
background-image:url("http://biodinamica-ayurveda.com/design/mba-logo-small.png");
background-repeat:no-repeat;
display:block;
font-size:12px;
height:74px;
padding-top:4.3em;
position:absolute;
right:-5px;
top:-3px;
width:225px;
}
.header-container {
	height:74px;
	padding:10px 0;
	margin:0 auto;
	width:95%;
}
</style> 
 
<script type="text/javascript"> 
	function prevMO(el) 
	{
		$(el).select('h4 a')[0].addClassName('title-active');
		$(el).select('a.mas')[0].addClassName('mas-hover');
	}
	function prevMU(el) 
	{
		$(el).select('h4 a')[0].removeClassName('title-active');
		$(el).select('a.mas')[0].removeClassName('mas-hover');
	}
	
	//for highlights box
	function noScroll() 
	{
		var _oOffset = $('highlights-box-noscroll').cumulativeOffset();
		var _oTop = _oOffset[1];
		var _closeEnough = 11; // PX
		Event.observe(window, 'scroll', function() 
		{
			var sOffset = document.viewport.getScrollOffsets();
			var sTop = sOffset[1];
			var realDistance = _oTop - sTop;
			if(realDistance < _closeEnough)
				$('highlights-box-noscroll').addClassName('hb-fixed');
			else
				$('highlights-box-noscroll').removeClassName('hb-fixed');
		});
	}
 
 
YAHOO.util.Event.onContentReady("productsandservices", function () {
 
	 var oMenuBar = new YAHOO.widget.MenuBar("productsandservices", { 
																autosubmenudisplay: true, 
																hidedelay: 750, 
																lazyload: true });
	 //Define an array of object literals, each containing the data necessary to create a submenu.
	 var aSubmenuData = [
	 
		  {
				id: "servicios", 
				itemdata: [ 
					 { text: "COUNSELING", url: "http://www.biodinamica-ayurveda.com/servicios/counseling"},
					 { text: "CURSOS", url: "http://www.biodinamica-ayurveda.com/servicios/cursos" },
					 { text: "SEMINARIOS <br />Y TALLERES", url: "http://www.biodinamica-ayurveda.com/servicios/seminarios" },
					 { text: "TRATAMIENTOS <br />Y COSMETICA", url: "http://www.biodinamica-ayurveda.com/servicios/cosmetica_y_tratamientos" }
				]
		  },
 
		  {
				id: "ayurveda", 
				itemdata: [
			{ text: "CONSULTA <br />AYURVEDICA", url: "http://www.biodinamica-ayurveda.com/ayurveda/consulta"  },
			{ text: "TECNICAS DE <br />MEDITACION", url: "http://www.biodinamica-ayurveda.com/ayurveda/tecnicas_de_meditacion"  },
			{ text: "MASAJE <br />AYURVEDICO", url: "http://www.biodinamica-ayurveda.com/ayurveda/masaje_ayurvedico"  },
					 { text: "EL CAMINO <br />DEL INSTRUCTOR", url: "http://www.biodinamica-ayurveda.com/ayurveda/el_camino_del_instructor"  }
											  
				]    
		  },
		  
		  {
				id: "actividades", 
				itemdata: [
			//{ text: "CHARLAS Y <br />TALLERES", url: "http://www.biodinamica-ayurveda.com/actividades/charlas_y_talleres"  },
			/*{ text: "PUBLICACIONES <br />Y NOTICIAS", url: "http://www.biodinamica-ayurveda.com/actividades/"  },*/
			{ text: "CALENDARIO DE <br />ACTIVIDADES", url: "http://www.biodinamica-ayurveda.com/actividades/calendario"  },
			{ text: "TESTIMONIOS", url: "http://www.biodinamica-ayurveda.com/testimonios"  },
			//{ text: "NOTAS EN EL BLOG", url: "http://blog.biodinamica-ayurveda.com/", classname: "activesub"},
			{ text: "ENLACES <br />RELACIONADOS", url: "http://www.biodinamica-ayurveda.com/actividades/enlaces_relacionados"  },
			{ text: "FORMACION <br />A DISTANCIA", url: "http://www.biodinamica-ayurveda.com/actividades/formacion_a_distancia"  }
			
				] 
		  }                    
	 ];
	 var ua = YAHOO.env.ua,
		  oAnim;  // Animation instance
	 
	 function onSubmenuBeforeShow(p_sType, p_sArgs) 
	 {
		  var oBody,
				oElement,
				oShadow,
				oUL;
	 
			if (this.parent) 
			{
				oElement = this.element;				
				oShadow = oElement.lastChild;
				oShadow.style.height = "0px";
				
				if (oAnim && oAnim.isAnimated()) 
				{				
					 oAnim.stop();
					 oAnim = null;				
				}
				
				oBody = this.body;
				//  Check if the menu is a submenu of a submenu.
				if (this.parent && !(this.parent instanceof YAHOO.widget.MenuBarItem)) 
				{
					 if (ua.gecko || ua.opera) 
						  oBody.style.width = oBody.clientWidth + "px";
					 
					 if (ua.ie == 7) 
						  oElement.style.width = oElement.clientWidth + "px";
				}
				oBody.style.overflow = "hidden";
				oUL = oBody.getElementsByTagName("ul")[0];
				oUL.style.marginTop = ("-" + oUL.offsetHeight + "px");
		  }
	 }
	 /*
		  "tween" event handler for the Anim instance, used to 
		  syncronize the size and position of the Menu instance's 
		  shadow and iframe shim (if it exists) with its 
		  changing height.
	 */
	 function onTween(p_sType, p_aArgs, p_oShadow) 
	 {
		  if (this.cfg.getProperty("iframe")) 
		  	this.syncIframe();
		  
		  if (p_oShadow) 
		  	p_oShadow.style.height = this.element.offsetHeight + "px";		  
	 }
	 /*
		  "complete" event handler for the Anim instance, used to 
		  remove style properties that were animated so that the 
		  Menu instance can be displayed at its final height.
	 */
	 function onAnimationComplete(p_sType, p_aArgs, p_oShadow) 
	 {
		  var oBody = this.body,
				oUL = oBody.getElementsByTagName("ul")[0];
 
		  if (p_oShadow) 
	  		p_oShadow.style.height = this.element.offsetHeight + "px";
		  
		  oUL.style.marginTop = "";
		  oBody.style.overflow = "";
		  //  Check if the menu is a submenu of a submenu.
		  if (this.parent && !(this.parent instanceof YAHOO.widget.MenuBarItem)) 
		  {
				// Clear widths set by the "beforeshow" event handler
				if (ua.gecko || ua.opera)
					 oBody.style.width = "";
				
				if (ua.ie == 7) 
					 this.element.style.width = "";
		  }
	 }
	 /*
			"show" event handler for each submenu of the MenuBar 
			instance - used to kick off the animation of the 
			<ul> element.
	 */
	 function onSubmenuShow(p_sType, p_sArgs) 
	 {
		  var oElement,
				oShadow,
				oUL;
		  
		  if (this.parent) 
		  {
				oElement = this.element;
				oShadow = oElement.lastChild;
				oUL = this.body.getElementsByTagName("ul")[0];
				oAnim = new YAHOO.util.Anim(oUL, 
					 { marginTop: { to: 0 } },
					 .5, YAHOO.util.Easing.easeOut);
				oAnim.onStart.subscribe(function () {
					 oShadow.style.height = "100%";
				});
				oAnim.animate();
				/*
					 Subscribe to the Anim instance's "tween" event for 
					 IE to syncronize the size and position of a 
					 submenu's shadow and iframe shim (if it exists)  
					 with its changing height.
				*/
				if (YAHOO.env.ua.ie) 
				{					 
					 oShadow.style.height = oElement.offsetHeight + "px";
					 oAnim.onTween.subscribe(onTween, oShadow, this);
				}
				oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);
		  }
	 }
	 
	 oMenuBar.subscribe("beforeRender", function () {
		var nSubmenus = aSubmenuData.length, i;
		if (this.getRoot() == this) {
 
		for (i = 0; i < nSubmenus; i++) {
					this.getItem(i).cfg.setProperty("submenu", aSubmenuData[i]);
		}
 
		  }
 
	 });
	 oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
	 oMenuBar.subscribe("show", onSubmenuShow);
	 oMenuBar.render();         
});
 
</script> 
 
<!-- MENU ENDS --> 
</head> 
<body> 
<div id="doc2"> 
   <div id="hd"> 
     <div class="header-container"> 
      <a href="http://www.biodinamica-ayurveda.com/" id="gs-logo"><img src="http://www.biodinamica-ayurveda.com/design/logo-graciela-schnoller.png" title="Centro Graciela Schnoller" alt="Centro Graciela Schnoller" width="411" height="71" /></a> 
      <div style="position:relative"><a href="http://www.biodinamica-ayurveda.com/mba" id="mba-logo" style="margin-top: 1em;">&nbsp;METODO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIODINAMICA&nbsp;&nbsp;AYURVEDA</a></div> 
     </div> 
     <div class="header-container" style="height: 24px; padding-bottom:0"> 
       <div class="yui-g"> 
         <div class="yui-u first"> 
           <table style="margin-top:-.5em; margin-left:3em"> 
             <tr> 
               <td class="borderright secondaryMenu"><a href="http://www.biodinamica-ayurveda.com/">INICIO</a></td> 
               <td class="borderright secondaryMenu"><a href="http://www.biodinamica-ayurveda.com/nuestro_centro">NUESTRO CENTRO</a></td> 
               <td class="borderright secondaryMenu"><a href="http://www.biodinamica-ayurveda.com/equipo">EQUIPO</a></td> 
               <td class="borderright secondaryMenu"><a href="http://www.biodinamica-ayurveda.com/contactenos">CONTACTENOS</a></td> 
               <td class="secondaryMenu"><a href="http://blog.biodinamica-ayurveda.com/" class="selected">BLOG DE NOTAS!</a></td>   
               <!--<td class="secondaryMenu"><a href="http://www.biodinamica-ayurveda.com/">LOGIN</a></td>-->
             </tr> 
           </table> 
         </div> 
         <div class="yui-u"> 
           <!-- RIGHT MENU COMES HERE --> 
         </div> 
       </div> 
     </div> 
     <div id="big-image" style="background-image: url('http://www.biodinamica-ayurveda.com/design/blog.jpg')">       
             <!-- <div id="back-url">
         <a href="http://www.biodinamica-ayurveda.com/">Inicio</a>
         >
         <a href="http://www.biodinamica-ayurveda.com/">Cursos</a>
      </div> --> 
      
      
       <div id="menucont"> 
         <div id="productsandservices" class="yuimenubar yuimenubarnav"> 
           <div class="bd"> 
             <ul id="main-menu" class="first-of-type"> 
               <li class="yuimenubaritem first-of-type topmenu "> <a class="yuimenubaritemlabel" href="#">SERVICIOS</a></li> 
               <li class="yuimenubaritem topmenu " style="margin-left: 6px;"> <a class="yuimenubaritemlabel"  href="#">AYURVEDA</a> </li> 
               <li class="yuimenubaritem topmenu "  style="margin-left: 6px;"> <a class="yuimenubaritemlabel" " href="#">ACTIVIDADES</a> </li> 
             </ul> 
           </div> 
         </div> 
       </div> 
       
       <!--
       <form action="http://www.biodinamica-ayurveda.com//buscar/r" id="cse-search-box">
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

	<div id="main">
