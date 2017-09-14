	<div id="ft">
		<div class="yui-gb"> 
			<div class="yui-u first">
				<a class="icon icon6" href="#">&nbsp;</a>
				<div><a href="#" class="green">COUNSELING AYURVEDICO</a></div>
			</div>
			<div class="yui-u">
				<a class="icon icon3" href="#">&nbsp;</a>
				<div><a href="#" class="green">CONTACTENOS</a></div>
			</div>
			<div class="yui-u">
				<a class="icon icon7" href="#">&nbsp;</a>
				<div><a href="#" class="green">CHARLAS Y TALLERES</a></div>
			</div>
		</div>
		
	</div>
</div>


<script type="text/javascript" src="<?=base_url()?>js/prototype.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/yahoo-dom-event.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/animation-min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/container_core-min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/menu-min.js"></script>

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
					 { text: "COUNSELING", url: "<?php echo base_url()?>servicios/counseling" <?=($this->uri->segment(2) == 'counseling') ? ', classname: "activesub"' : '';?>},
					 { text: "CURSOS", url: "<?php echo base_url()?>servicios/cursos" <?=($this->uri->segment(2) == 'cursos') ? ', classname: "activesub"' : '';?>},
					 { text: "SEMINARIOS <br />Y TALLERES", url: "<?php echo base_url()?>servicios/seminarios" <?=($this->uri->segment(2) == 'seminarios') ? ', classname: "activesub"' : '';?>},
					 { text: "TRATAMIENTOS <br />Y COSMETICA", url: "<?php echo base_url()?>servicios/cosmetica_y_tratamientos" <?=($this->uri->segment(2) == 'cosmetica_y_tratamientos') ? ', classname: "activesub"' : '';?>}
				]
		  },

		  {
				id: "ayurveda", 
				itemdata: [
			{ text: "CONSULTA <br />AYURVEDICA", url: "<?php echo base_url()?>ayurveda/consulta" <?=($this->uri->segment(2) == 'consulta') ? ', classname: "activesub"' : '';?> },
			{ text: "TECNICAS DE <br />MEDITACION", url: "<?php echo base_url()?>ayurveda/tecnicas_de_meditacion" <?=($this->uri->segment(2) == 'tecnicas_de_meditacion') ? ', classname: "activesub"' : '';?> },
			{ text: "MASAJE <br />AYURVEDICO", url: "<?php echo base_url()?>ayurveda/masaje_ayurvedico" <?=($this->uri->segment(2) == 'masaje_ayurvedico') ? ', classname: "activesub"' : '';?> },
					 { text: "EL CAMINO <br />DEL INSTRUCTOR", url: "<?php echo base_url()?>ayurveda/el_camino_del_instructor" <?=($this->uri->segment(2) == 'el_camino_del_instructor') ? ', classname: "activesub"' : '';?> }
											  
				]    
		  },
		  
		  {
				id: "actividades", 
				itemdata: [
			//{ text: "CHARLAS Y <br />TALLERES", url: "<?php echo base_url()?>actividades/charlas_y_talleres" <?=($this->uri->segment(2) == 'charlas_y_talleres') ? ', classname: "activesub"' : '';?> },
			/*{ text: "PUBLICACIONES <br />Y NOTICIAS", url: "<?php echo base_url()?>actividades/" <?=($this->uri->segment(1) == 'actividades' && $this->uri->segment(2) == '') ? ', classname: "activesub"' : '';?> },*/
			{ text: "CALENDARIO DE <br />ACTIVIDADES", url: "<?php echo base_url()?>actividades/calendario" <?=($this->uri->segment(2) == 'actividades') ? ', classname: "activesub"' : '';?> },
			{ text: "TESTIMONIOS", url: "<?php echo base_url()?>testimonios" <?=($this->uri->segment(1) == 'testimonios') ? ', classname: "activesub"' : '';?> },
			//{ text: "NOTAS EN EL BLOG", url: "http://blog.biodinamica-ayurveda.com/"},
			{ text: "ENLACES <br />RELACIONADOS", url: "<?php echo base_url()?>actividades/enlaces_relacionados" <?=($this->uri->segment(2) == 'enlaces_relacionados') ? ', classname: "activesub"' : '';?> },
			{ text: "FORMACION <br />A DISTANCIA", url: "<?php echo base_url()?>actividades/formacion_a_distancia" <?=($this->uri->segment(2) == 'formacion_a_distancia') ? ', classname: "activesub"' : '';?> }
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

<!-- NO SCROLL SETUP -->
<script type="text/javascript">
Event.observe(window, 'load', noScroll);
</script>
<!-- EOF NOSCROLL SETUP -->
</body>
</html>