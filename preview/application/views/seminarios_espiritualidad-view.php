<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
				<div class="yui-u first"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_vitalidad">VITALIDAD</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_emociones">EMOCIONES</a></div>
				<div class="yui-u"><a class="mas grey" >ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<h2>ESPIRITUALIDAD</h2>
					<p class="green">Está en nuestra naturaleza de vida buscar niveles superiores de crecimiento y realización. Si decides acompañarnos en estos seminarios podrás adentrarte todavía más en el conocimiento de la sabiduría espiritual de la India y de los estudiosos occidentales, que investigaron como ayudar a expandir la conciencia humana. Incluyen técnicas de meditación avanzadas para activar y expandir las cualidades del corazón, la mente y el espíritu.</p>
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
			
		</div>
	</div>