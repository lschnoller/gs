<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/reset-fonts-grids.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">

<!-- MENU STARTS -->
<link rel="stylesheet" type="text/css" href="http://developer.yahoo.com/yui/build/menu/assets/skins/sam/menu.css">

<script type="text/javascript" src="http://developer.yahoo.com/yui/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/animation/animation.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/container/container_core.js"></script>
<script type="text/javascript" src="http://developer.yahoo.com/yui/build/menu/menu.js"></script>
<script type="text/javascript">

            /*
                 Initialize and render the MenuBar when its elements are ready 
                 to be scripted.
            */

            YAHOO.util.Event.onContentReady("productsandservices", function () {

                /*
					Instantiate a MenuBar:  The first argument passed to the constructor
					is the id for the Menu element to be created, the second is an 
					object literal of configuration properties.
                */

                var oMenuBar = new YAHOO.widget.MenuBar("productsandservices", { 
                                                            autosubmenudisplay: true, 
                                                            hidedelay: 750, 
                                                            lazyload: true });

                /*
                     Define an array of object literals, each containing 
                     the data necessary to create a submenu.
                */

                var aSubmenuData = [
                
                    {
                        id: "servicios", 
                        itemdata: [ 
                            { text: "COUNSELING", url: "<?php echo base_url()?>servicios/counceling" <?=($this->uri->segment(2) == 'counceling') ? ', classname: "activesub"' : '';?>},
                            { text: "CURSOS", url: "<?php echo base_url()?>servicios/cursos" <?=($this->uri->segment(2) == 'cursos') ? ', classname: "activesub"' : '';?>},
                            { text: "SEMINARIOS", url: "<?php echo base_url()?>servicios/seminarios" <?=($this->uri->segment(2) == 'seminarios') ? ', classname: "activesub"' : '';?>},
                            { text: "TRATAMIENTOS <br />Y COSMÉTICA", url: "<?php echo base_url()?>servicios/cosmetica_y_tratamientos" <?=($this->uri->segment(2) == 'cosmetica_y_tratamientos') ? ', classname: "activesub"' : '';?>}
                        ]
                    },

                    {
                        id: "ayurveda", 
                        itemdata: [
							{ text: "CONSULTA <br />AYURVEDICA", url: "<?php echo base_url()?>ayurveda/consulta" <?=($this->uri->segment(2) == 'consulta') ? ', classname: "activesub"' : '';?> },
							{ text: "TÉCNICAS DE <br />MEDITACIÓN", url: "<?php echo base_url()?>ayurveda/tecnicas_de_meditacion" <?=($this->uri->segment(2) == 'tecnicas_de_meditacion') ? ', classname: "activesub"' : '';?> },
							{ text: "MASAJE <br />AYURVÉDICO", url: "<?php echo base_url()?>ayurveda/masaje_ayurvedico" <?=($this->uri->segment(2) == 'masaje_ayurvedico') ? ', classname: "activesub"' : '';?> },
                            { text: "EL CAMINO <br />DEL INSTRUCTOR", url: "<?php echo base_url()?>ayurveda/el_camino_del_instructor" <?=($this->uri->segment(2) == 'el_camino_del_instructor') ? ', classname: "activesub"' : '';?> }
                                               
                        ]    
                    },
                    
                    {
                        id: "actividades", 
                        itemdata: [
							{ text: "FORMACIÓN <br />A DISTANCIA", url: "<?php echo base_url()?>actividades/formacion_a_distancia" <?=($this->uri->segment(2) == 'formacion_a_distancia') ? ', classname: "activesub"' : '';?> },
							{ text: "CHARLAS Y <br />TALLERES", url: "<?php echo base_url()?>actividades/charlas_y_talleres" <?=($this->uri->segment(2) == 'charlas_y_talleres') ? ', classname: "activesub"' : '';?> },
							{ text: "PUBLICACIONES <br />Y NOTICIAS", url: "<?php echo base_url()?>actividades/" <?=($this->uri->segment(1) == 'actividades' && $this->uri->segment(2) == '') ? ', classname: "activesub"' : '';?> },
							{ text: "CALENDARIO DE <br />ACTIVIDADES", url: "<?php echo base_url()?>actividades/calendario" <?=($this->uri->segment(2) == 'actividades') ? ', classname: "activesub"' : '';?> },
							{ text: "TESTIMONIOS", url: "<?php echo base_url()?>testimonios" <?=($this->uri->segment(1) == 'testimonios') ? ', classname: "activesub"' : '';?> },
							{ text: "ENLACES <br />RELACIONADOS", url: "<?php echo base_url()?>actividades/enlaces_relacionados" <?=($this->uri->segment(2) == 'enlaces_relacionados') ? ', classname: "activesub"' : '';?> }
							
                        ] 
                    }                    
                ];


                var ua = YAHOO.env.ua,
                    oAnim;  // Animation instance
                /*
                     "beforeshow" event handler for each submenu of the MenuBar
                     instance, used to setup certain style properties before
                     the menu is animated.
                */

                function onSubmenuBeforeShow(p_sType, p_sArgs) 
					 {
                    var oBody,
                        oElement,
                        oShadow,
                        oUL;
                
					 		if (this.parent) {

                        oElement = this.element;

                        /*
                             Get a reference to the Menu's shadow element and 
                             set its "height" property to "0px" to syncronize 
                             it with the height of the Menu instance.
                        */

                        oShadow = oElement.lastChild;
                        oShadow.style.height = "0px";

                        
                        /*
                            Stop the Animation instance if it is currently 
                            animating a Menu.
                        */ 
                    
                        if (oAnim && oAnim.isAnimated()) {
                        
                            oAnim.stop();
                            oAnim = null;
                        
                        }


                        /*
                            Set the body element's "overflow" property to 
                            "hidden" to clip the display of its negatively 
                            positioned <ul> element.
                        */ 

                        oBody = this.body;


                        //  Check if the menu is a submenu of a submenu.

                        if (this.parent && 
                            !(this.parent instanceof YAHOO.widget.MenuBarItem)) {
                        

                            /*
                                There is a bug in gecko-based browsers and Opera where 
                                an element whose "position" property is set to 
                                "absolute" and "overflow" property is set to 
                                "hidden" will not render at the correct width when
                                its offsetParent's "position" property is also 
                                set to "absolute."  It is possible to work around 
                                this bug by specifying a value for the width 
                                property in addition to overflow.
                            */

                            if (ua.gecko || ua.opera) {
                            
                                oBody.style.width = oBody.clientWidth + "px";
                            
                            }
                            
                            
                            /*
                                Set a width on the submenu to prevent its 
                                width from growing when the animation 
                                is complete.
                            */
                            
                            if (ua.ie == 7) {

                                oElement.style.width = oElement.clientWidth + "px";

                            }
                        
                        }

    
                        oBody.style.overflow = "hidden";


                        /*
                            Set the <ul> element's "marginTop" property 
                            to a negative value so that the Menu's height
                            collapses.
                        */ 

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

                function onTween(p_sType, p_aArgs, p_oShadow) {

                    if (this.cfg.getProperty("iframe")) {
                    
                        this.syncIframe();
                
                    }
                
                    if (p_oShadow) {
                
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    
                    }
                
                }


                /*
                    "complete" event handler for the Anim instance, used to 
                    remove style properties that were animated so that the 
                    Menu instance can be displayed at its final height.
                */

                function onAnimationComplete(p_sType, p_aArgs, p_oShadow) {

                    var oBody = this.body,
                        oUL = oBody.getElementsByTagName("ul")[0];

                    if (p_oShadow) {
                    
                        p_oShadow.style.height = this.element.offsetHeight + "px";
                    
                    }


                    oUL.style.marginTop = "";
                    oBody.style.overflow = "";
                    

                    //  Check if the menu is a submenu of a submenu.

                    if (this.parent && 
                        !(this.parent instanceof YAHOO.widget.MenuBarItem)) {


                        // Clear widths set by the "beforeshow" event handler

                        if (ua.gecko || ua.opera) {
                        
                            oBody.style.width = "";
                        
                        }
                        
                        if (ua.ie == 7) {

                            this.element.style.width = "";

                        }
                    
                    }
                    
                }


                /*
                     "show" event handler for each submenu of the MenuBar 
                     instance - used to kick off the animation of the 
                     <ul> element.
                */

                function onSubmenuShow(p_sType, p_sArgs) {

                    var oElement,
                        oShadow,
                        oUL;
                
                    if (this.parent) {

                        oElement = this.element;
                        oShadow = oElement.lastChild;
                        oUL = this.body.getElementsByTagName("ul")[0];
                    

                        /*
                             Animate the <ul> element's "marginTop" style 
                             property to a value of 0.
                        */

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
    
                        if (YAHOO.env.ua.ie) {
                            
                            oShadow.style.height = oElement.offsetHeight + "px";


                            /*
                                Subscribe to the Anim instance's "tween"
                                event, passing a reference Menu's shadow 
                                element and making the scope of the event 
                                listener the Menu instance.
                            */

                            oAnim.onTween.subscribe(onTween, oShadow, this);
    
                        }
    

                        /*
                            Subscribe to the Anim instance's "complete" event,
                            passing a reference Menu's shadow element and making 
                            the scope of the event listener the Menu instance.
                        */
    
                        oAnim.onComplete.subscribe(onAnimationComplete, oShadow, this);
                    
                    }
                
                }


                /*
                     Subscribe to the "beforerender" event, adding a submenu 
                     to each of the items in the MenuBar instance.
                */

                oMenuBar.subscribe("beforeRender", function () {

					var nSubmenus = aSubmenuData.length,
						i;


                    if (this.getRoot() == this) {

						for (i = 0; i < nSubmenus; i++) {
                        	this.getItem(i).cfg.setProperty("submenu", aSubmenuData[i]);
						}

                    }

                });


                /*
                     Subscribe to the "beforeShow" and "show" events for 
                     each submenu of the MenuBar instance.
                */
                
                oMenuBar.subscribe("beforeShow", onSubmenuBeforeShow);
                oMenuBar.subscribe("show", onSubmenuShow);


                /*
                     Call the "render" method with no arguments since the 
                     markup for this MenuBar instance is already exists in 
                     the page.
                */

                oMenuBar.render();         
            
            });

        </script>

<style type="text/css">
.topmenu{
	background-image: url("http://biodinamica-ayurveda.com/design/menutop.png");
	background-repeat: no-repeat;
	width: 120px;
	height: 43px;        
}
#menucont{
	position: absolute;
	left: 520px;
	top: -35px;
	width:500px;
}
.yuimenubaritem {
	margin:0 1em;
}
		
.yuimenubaritem a{
	text-align: center;
	padding-top: 10px;
	color: #9B9F04;
	font-size: 13px;
}

#main-menu {
	font:20px "Century Gothic", Arial, sans-serif, verdana;
	color:#D8DFB9;
	text-shadow:1px 1px 1px #D8DFB9;
	margin:.5em;
	background-color:transparent;
}
#main-menu li{
	margin:0 .5em;
}
.activesub a{
	color: #FF6600;
}
#activemain{
	color: #FF6600;
}
.first-of-type li{
	
	
}
.first-of-type li a:HOVER{
	color: #FF6600;
}

#servicios .bd ul, #ayurveda .bd ul, #actividades .bd ul {
	background-color:#fff;
	border:1px solid #D8DFB9;
	
	padding:.2em .5em;
	margin:0;
}
#servicios .bd ul li a, #ayurveda .bd ul li a, #actividades .bd ul li a{
	font:12px "Century Gothic", Arial, sans-serif, verdana;
}
.secondaryMenu{
	white-space:nowrap;
	font-size: 11px;
}
.secondaryMenu a{
	color:#777;
}
</style>
<!-- MENU ENDS -->

</head>

<body>
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
<div id="doc2">					
	<div id="hd">
		<div class="c90" style="height: 74px;">
			<a href="<?=base_url()?>" id="gs-logo">&nbsp;</a>
			<a href="<?=base_url()?>mba" id="mba-logo">&nbsp;</a>
		</div>
		<div class="c90" style="height: 24px; padding-bottom:0">
			<div class="yui-g"> 
			   <div class="yui-u first">
			   <table>
			   	<tr>
			   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>">INICIO</a></td>
			   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>nuestro_centro">NUESTRO CENTRO</a></td>
			   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>equipo">EQUIPO</a></td>
			   		<td class="borderright secondaryMenu"><a href="<?php echo base_url()?>contactenos">CONTACTENOS</a></td>
			   		<td><a href="<?php echo base_url()?>" class="orange secondaryMenu">LOGIN</a></td>
			   	</tr>
			   </table>
			   </div>
			   <div class="yui-u">
			   	<!-- RIGHT MENU COMES HERE -->
			   </div>
			</div> 
		</div>
		<div id="big-image" style="background-image: url('<?php echo base_url()?>design/<?php echo $image?>')">
			<!-- <div id="back-url">
				<a href="<?php echo base_url()?>">Inicio</a>
				>
				<a href="<?php echo base_url()?>">Cursos</a>
			</div> -->
			<div id="menucont">
			   		 <div id="productsandservices" class="yuimenubar yuimenubarnav">
                            <div class="bd">
                                <ul id="main-menu" class="first-of-type">
                                    <li class="yuimenubaritem first-of-type topmenu ">
                                        <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'servicios') ? 'id="activemain"' : '';?> href="#">SERVICIOS</a>
                                    </li>
                                    <li class="yuimenubaritem topmenu " style="margin-left: 6px;">
                                        <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'ayurveda') ? 'id="activemain"' : '';?> href="#">AYURVEDA</a>
                                    </li>
                                    <li class="yuimenubaritem topmenu "  style="margin-left: 6px;">
                                        <a class="yuimenubaritemlabel" <?=($this->uri->segment(1) == 'actividades' || $this->uri->segment(1) == 'testimonios') ? 'id="activemain"' : '';?>" href="#">ACTIVIDADES</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
			   </div>
			
				<form action="http://biodinamica-ayurveda.com/buscar/r" id="cse-search-box">
				  <div id="buscar">
				    <input type="hidden" name="cx" value="008828646780703459021:lchzyfmqjdk" />
				    <input type="hidden" name="cof" value="FORID:10;" />
				    <input type="hidden" name="ie" value="UTF-8" />
				   <label>BUSCAR</label><input type="text" name="q" class="gsc-search-input" size="31" />
				    <input type="submit" name="sa" class="gsc-search-button" value="" style="display: none"/> 
				  </div>
				</form>
				<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=es"></script>
	   		
		</div>
	</div>