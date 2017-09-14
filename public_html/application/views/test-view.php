<div id="bd">
		<div class="c90">
			<div class="yui-gb" id="submenu"> 
				<div class="yui-u first"><a class="submenu-active">VITALIDAD</a></div>
				<div class="yui-u"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_emociones">EMOCIONES</a></div>
				<div class="yui-u"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_espiritualidad">ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				
            <div class="yui-u first">
					<!--<h2>VITALIDAD</h2>-->
					<p class="intro-text-green">El componente principal de nuestras enseñanzas es que el cuerpo, la mente y el espíritu son una unidad.</span> Cuando comprendemos e integramos estos aspectos de nuestra naturaleza podemos incrementar la salud y el bienestar.</p>
					<p class="intro-text-soft">Cuando comprendemos e integramos estos aspectos de nuestra naturaleza podemos incrementar la salud y el bienestar. Estos talleres consisten en pasos prácticos para formar hábitos positivos, que te permitan revertir los efectos del estrés y de la edad, mediante el trabajo de la conciencia. Incluyen instrucciones precisas en los pilares ayurvédicos: meditación, alimentación, actividades físicas y deportivas, ejercicios respiratorios.</p>
					<?php 
					if(is_array($list)){
						foreach($list as $key=>$val){
							echo '<div style="clear:right; margin-bottom:1em"><h3 class="orange" id="c_'.$key.'">'.$val['title'].'</h3>';
							echo '<h4>'.$val['subtitle'].'</h4>';
							echo '<p>'.$val['desci'].'</p>';
							echo '<p>'.$val['date_text'].'</p>';
							echo '<a style="float:right; margin-bottom:1em; margin-top:-.5em" class="mas" href="#submenu">Volver Arriba</a></div>';
						}
					}
					
					?>
				</div>
				
            <div class="yui-u">
            <!-- FIXED ELEMENT SETUP -->
            	<style>
				.fixed{
					position: fixed;
					top:10px;
					width: 243px;
				}
				</style>
            	<script type="text/javascript">
				Event.observe(window, 'load', function() 
				{
					var _oOffset = $('highlights-box').cumulativeOffset();
					var _oTop = _oOffset[1];
					var _closeEnough = 11; // PX
					Event.observe(window, 'scroll', function() 
					{
						var sOffset = document.viewport.getScrollOffsets();
						var sTop = sOffset[1];
						var realDistance = _oTop - sTop;
						if(realDistance < _closeEnough)
							$('highlights-box').addClassName('fixed');
						else
							$('highlights-box').removeClassName('fixed');

						var _bOffset = $('update').cumulativeOffset();
						var _oBottom = _bOffset[1];
						$('update').update(_oBottom);
					});
				});
				</script>
				<!-- FIXED ELEMENT EOF -->
            	<div id="highlights-box" class="highlights-box">
                  <h3 style="margin-left:.5em;">Talleres</h3>
                  <ul>
                  
						<?php 
						if(is_array($list)){
							foreach($list as $key=>$val){
								echo '<li><a href="#c_'.$key.'">'.$val['title'].'</a></li>';
								echo '<li><a href="#c_'.$key.'">'.$val['title'].'</a></li>';
								echo '<li><a href="#c_'.$key.'">'.$val['title'].'</a></li>';
							}
						}						
						?>
						<li id="update"></li>
                 	</ul>
				</div>
			</div>
            
			</div>
		</div>
	</div>