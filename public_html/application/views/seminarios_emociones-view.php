<div id="bd">
		<div class="c90">
			<div class="yui-gb" id="submenu"> 
				<div class="yui-u first"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_vitalidad">VITALIDAD</a></div>
				<div class="yui-u"><a class="submenu-active">EMOCIONES</a></div>
				<div class="yui-u"><a class="submenu" href="<?php echo base_url()?>servicios/seminarios_espiritualidad">ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
         
				<div class="yui-u first">					
					<p class="intro-text-green">Cada uno de estos talleres te permitirá catalizar cambios positivos en la relación contigo mismo, con los miembros de tu familia, tus amigos y tu entorno. Participarás en ejercicios y técnicas introspectivas específicas hacia una genuina aceptación de tus emociones, una transformación de tus pensamientos, pudiendo alzanzar un estado de felicidad u liberación interior.</p>
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
					</div>
				</div>
            
			</div>
		</div>
	</div>