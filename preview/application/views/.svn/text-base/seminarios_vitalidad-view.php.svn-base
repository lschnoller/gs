<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
				<div class="yui-u first"><a class="mas grey" >VITALIDAD</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_emociones">EMOCIONES</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/seminarios_espiritualidad">ESPIRITUALIDAD</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<h2>VITALIDAD</h2>
					<h4>El componente principal de nuestras enseñanzas es que el cuerpo, la mente y el espíritu son una unidad. </h4>
					<p>Cuando comprendemos e integramos estos aspectos de nuestra naturaleza podemos incrementar la salud y el bienestar.</p>
					<p>Cuando comprendemos e integramos estos aspectos de nuestra naturaleza podemos incrementar la salud y el bienestar.</p>
					<p>Estos talleres consisten en pasos prácticos para formar hábitos positivos, que te permitan revertir los efectos del estrés y de la edad, mediante el trabajo de la conciencia. Incluyen instrucciones precisas en los pilares ayurvédicos: meditación, alimentación, actividades físicas y deportivas, ejercicios respiratorios.</p>
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