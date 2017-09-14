<!-- NO SCROLL SETUP -->
<script type="text/javascript">

Event.observe(window, 'load', noScroll);

</script>
<!-- EOF NOSCROLL SETUP -->
<div id="bd">
		<div class="c90">
			<div class="yui-gb" id="submenu"> 
				<div class="yui-u first"><a class="submenu" href="<?php echo base_url()?>servicios/cursos">CURSOS</a></div>
				<div class="yui-u"><a class="submenu-active">TÉCNICAS DE MEDITACIÓN</a></div>
				<div class="yui-u"><a class="submenu" href="<?php echo base_url()?>servicios/curso_masaje_ayurvedico">MASAJE AYURVÉDICO</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<!--<h2>TÉCNICAS DE MEDITACIÓN</h2>-->
					<p class="intro-text-orange" id="top">Los cursos de Meditación Biodinámica se ofrecen en diferentes modalidades de acuerdo a la necesidad. <br /><span style="color:#666">Están orientados a calmar la agitación de la mente y facilitar la práctica necesaria, para aprender a explorar los distintos niveles del ser: físico, emocional y mental, para pasar a niveles más profundos.</span></p>
					<?php 
					if(is_array($list)){
						foreach($list as $key=>$val){
							echo '<div style="clear:right; margin-bottom:1em"><h3 class="orange" id="c_'.$key.'">'.$val['title'].'</h3>';
							echo '<h4>'.$val['subtitle'].'</h4>';
							echo '<p>'.$val['desci'].'</p>';
							echo '<p style="margin-bottom:1em;">'.$val['date_text'].'</p></div>';
							//echo '<a style="float:right; margin-bottom:1em; margin-top:-.5em" class="mas" href="#submenu">Volver Arriba</a></div>';
						}
					}
					
					?>
				</div>
            
				<div class="yui-u">
            	<div id="highlights-box-noscroll" class="highlights-box">
                  <h3 style="margin-left:.5em;">Cursos</h3>
                  <ul>
                     <?php 
                     if(is_array($list))
                        foreach($list as $key=>$val)
                           echo '<li><a href="#c_'.$key.'">'.$val['title'].'</a></li>';
                     ?>
              		</ul>
              </div>           
            </div>
            
	      </div><!--yui-gc-->
			
			
			
			<p></p>
			<div class="yui-g"> 
				<div class="yui-u first">
					
				</div>
				<div class="yui-u">
					<div class="phone redish">
						Para reservar una entrevista o saber más,<br/>
						llámenos al <strong>4822-3498 o 4821-6721</strong>,<br/>
						de lunes a viernes, de 14 a 19 horas.
					</div>
				</div>
			</div>
         
		</div>
	</div>