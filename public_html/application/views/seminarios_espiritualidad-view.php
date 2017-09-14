<div id="bd">
		<div class="c90">
			<div class="yui-gb" id="submenu"> 
				<div class="yui-u first"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_vitalidad">VITALIDAD</a></div>
				<div class="yui-u"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_emociones">EMOCIONES</a></div>
				<div class="yui-u"><a class="submenu-active">ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
         
				<div class="yui-u first">
					<p class="intro-text-green">Estos talleres incluyen técnicas avanzadas de meditación, junto con trabajos sobre los Centros energéticos y Leyes universales superiores para activar y expandir las cualidades del corazón, la mente y el espíritu.</p>
					<?php 
					if(is_array($list)){
						foreach($list as $key=>$val){
							echo '<div style="clear:right; margin-bottom:1em"><h3 class="orange" id="c_'.$key.'">'.$val['title'].'</h3>';
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