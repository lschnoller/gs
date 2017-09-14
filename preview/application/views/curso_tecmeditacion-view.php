<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
				<div class="yui-u first"><a class="mas orange" href="<?php echo base_url()?>servicios/cursos">CURSOS</a></div>
				<div class="yui-u"><a class="mas grey">TÉCNICAS DE MEDITACIÓN</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/cursos_masajeayur">MASAJE AYURVÉDICO</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<h2>TÉCNICAS DE MEDITACIÓN</h2>
					<p>Los cursos de Meditación Biodinámica se ofrecen en diferentes modalidades de acuerdo a la necesidad. Están orientados, básicamente, a calmar la agitación de la mente y facilitar la práctica necesaria, para aprender a explorar los distintos niveles del ser: físico, emocional y mental, para pasar a niveles más profundos.</p>
					<?php 
					if(is_array($list)){
						foreach($list as $key=>$val){
							echo '<h3 class="orange" id="c_'.$key.'">'.$val['title'].'</h3>';
							echo '<h4>'.$val['subtitle'].'</h4>';
							echo '<p>'.$val['desci'].'</p>';
							echo '<p>'.$val['date_text'].'</p>';
						}
					}
					
					?>
				</div>
				<div class="yui-u bggrey">
					<h2></h2>
					<div class="c90">
						<?php 
						if(is_array($list)){
							foreach($list as $key=>$val){
								echo '<p class="marzo"><a href="#c_'.$key.'">'.$val['title'].'</a></p>';
							}
						}
						
						?>
					</div>
				</div>
			</div>
			
			
			
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