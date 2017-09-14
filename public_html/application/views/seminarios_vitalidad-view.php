
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
					<p class="intro-text-green">Estos talleres consisten en el trabajo de la conciencia a través de pasos prácticos para formar hábitos positivos, que te permitan revertir los efectos del estrés y de la edad. Incluye una guía en los pilares ayurvédicos: meditación, alimentación, actividad física conciente, y propósito en la acción.</p>
					<?php 
					if(is_array($list)){
						foreach($list as $key=>$val){
							echo '<div style="clear:right; margin-bottom:2em"><h3 class="orange" id="c_'.$key.'">'.$val['title'].'</h3>';
							echo '<h4>'.$val['subtitle'].'</h4>';
							echo '<p>'.$val['desci'].'</p>';
							echo '<p>'.$val['date_text'].'</p></div>';
							//echo '<a style="float:right; margin-bottom:1em; margin-top:-.5em" class="mas" href="#submenu">Volver Arriba</a></div>';
						}
					}
					
					?>
				</div>
				
            <div class="yui-u">
            
            	<div id="highlights-box-noscroll" class="highlights-box">
                  <h3 style="margin-left:.5em;">Talleres</h3>
                  <ul>
                  
						<?php 
						if(is_array($list)){
							foreach($list as $key=>$val){
								echo '<li><a href="#c_'.$key.'">'.$val['title'].'</a></li>';
							}
						}						
						?>
                 	</ul>
				</div>
			</div>
            
			</div>
		</div>
	</div>