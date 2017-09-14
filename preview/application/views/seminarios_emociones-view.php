<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
				<div class="yui-u first"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_vitalidad">VITALIDAD</a></div>
				<div class="yui-u"><a class="mas grey" >EMOCIONES</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_espiritualidad">ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<h2>EMOCIONES</h2>
					<p class="green">La meditación establece un puente entre consciente e inconsciente. De esta manera,  cuando aprendemos a ver nuestras fortalezas y debilidades, nos ayuda a descubrir nuestro camino hacia la integración y la  totalidad.</p>
					<p>Cada uno de estos talleres te permitirá catalizar cambios positivos en la relación que tienes contigo mismo, con los miembros de tu familia, tus amigos y tu entorno. Participarás en ejercicios y técnicas introspectivas específicas, para liberar emociones y transformar tus pensamientos sobre tu propósito de vida, accediendo a la dicha y a la liberación interior.</p>
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