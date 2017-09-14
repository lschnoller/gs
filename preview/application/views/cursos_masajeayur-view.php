<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
				<div class="yui-u first"><a class="mas orange" href="<?php echo base_url()?>servicios/cursos">CURSOS</a></div>
				<div class="yui-u"><a class="mas orange" href="<?php echo base_url()?>servicios/curso_tecmeditacion">TÉCNICAS DE MEDITACIÓN</a></div>
				<div class="yui-u"><a class="mas grey" >MASAJE AYURVÉDICO</a></div>
			</div>
		</div>
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
					<h2>MASAJE AYURVEDICO</h2>
					<p>El masaje con aceites es una técnica energética y armonizadora. Vigoriza los tejidos del cuerpo físico permitiendo disolver bloqueos, aliviar dolores y corregir la postura. El Masaje Ayurvédico es holístico, por lo tanto, armoniza cuerpo-psiquis-mente, descubriendo la belleza sutil.</p>
					<h3 class="orange">INTRODUCCIÓN AL MASAJE AYURVEDICO</h3>
					<h4>Curso Básico Intensivo</h4>
					<p>En este curso teórico-práctico podrás disfrutar de una experiencia renovadora y vivificante. Incorporarás nociones y recomendaciones que te ayudarán a vivir en equilibrio. Aprenderás las maniobras específicas del Masaje Tradicional Ayurvédico y apreciarás sus beneficios. No se necesita experiencia previa.</p>
					<h4>Síntesis de los contenidos:</h4>
					<p class="marzo">El enfoque MBA.</p>
					<p class="marzo">Principios ayurvédicos.</p>
					<p class="marzo">Energías elementales.</p>
					<p class="marzo">Test del biotipo constitucional.</p>
					<p class="marzo">Qué caracteriza al Masaje Ayurveda.</p>
					<p class="marzo">Manipulaciones.</p>
					<p class="marzo">Beneficios y contraindicaciones. </p>
					<p class="marzo">Masaje Vata, Pitta y Kapha.</p>
					<p class="marzo">Terapias sutiles: Aromas y Aceites. Colores. </p>
					<p class="marzo">Gemas y cristales.</p>
					<p class="marzo">Automasaje.</p>
					<h4>Información general</h4>
					<p>Se dictará en los meses de Febrero, Abril y Noviembre. Duración: 2 Jornadas. Sábado y Domingo, de 9.30 a 17.30 hs. Se entregan certificados.</p>
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
			<div class="yui-g"> 
				<div class="yui-u first">
					<p></p>
					<div class="msgbox-red">Inscríbete Aquí</div>
				</div>
				<div class="yui-u">
					<p></p>					
					<div class="phone redish">
						Para reservar una entrevista o saber más,<br/>
						llámenos al <strong>4822-3498 o 4821-6721</strong>,<br/>
						de lunes a viernes, de 14 a 19 horas.
					</div>
					
				</div>
			</div>
			
		</div>
	</div>