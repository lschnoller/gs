<div id="bd">
		<div class="c90">
			<div class="yui-gb"> 
         
				<div class="yui-u first">
            	<div class="third-box borderright" onmouseover="prevMO(this)" onmouseout="prevMU(this)" onclick="window.location='<?=base_url()?>servicios/seminarios_vitalidad'">
                  <h4 class="al"><a href="<?php echo base_url()?>servicios/seminarios_vitalidad">VITALIDAD</a></h4>
                  <img alt="Seminario de Vitalidad" src="<?php echo base_url()?>design/seminariosimg1.png" class="img-style-preview" />
                  <p class="desci">El componente principal de nuestras enseñanzas es que el cuerpo, la mente y el espíritu son una unidad. </p>
                  <p class="ar"><a href="<?php echo base_url()?>servicios/seminarios_vitalidad" class="mas orange fr">ver más</a></p>
               </div>
				</div>
            
				<div class="yui-u">
            	<div class="third-box borderright" onmouseover="prevMO(this)" onmouseout="prevMU(this)" onclick="window.location='<?=base_url()?>servicios/seminarios_emociones'">
                  <h4 class="al"><a href="<?php echo base_url()?>servicios/seminarios_emociones">EMOCIONES</a></h4>
                  <img alt="Seminario de Manejo de Emociones" src="<?php echo base_url()?>design/seminariosimg2.png" class="img-style-preview" />
                  <p class="desci">Cuando aprendemos a ver nuestras fortalezas y debilidades emprendemos un camino de transformación interior que nos hará más libres.</p>
                  <p class="ar"><a href="<?php echo base_url()?>servicios/seminarios_emociones" class="mas orange fr">ver más</a></p>
               </div>
				</div>
            
				<div class="yui-u">
            	<div class="third-box" onmouseover="prevMO(this)" onmouseout="prevMU(this)" onclick="window.location='<?=base_url()?>servicios/seminarios_espiritualidad'">
                  <h4 class="al"><a href="<?php echo base_url()?>servicios/seminarios_espiritualidad">ESPIRITUALIDAD</a></h4>
                  <img alt="Seminario de Espiritualidad" src="<?php echo base_url()?>design/seminariosimg3.png" class="img-style-preview" />
                  <p class="desci">Cada uno de nosotros lleva en su interioridad un alma que debe ser alimentado al igual que el cuerpo. </p>
                  <p><a href="<?php echo base_url()?>servicios/seminarios_espiritualidad" class="mas orange fr">ver más</a></p>
               </div>
				</div>
            
			</div> 
			<div class="diff" style="margin-bottom:4em;"></div>
			<div class="yui-gc"> 
				<div class="yui-u first">
            	<div style="padding-right:1em;">
                  <p class="intro-text-green">Los objetivos principales son desarrollar la sensibilidad, optimizar la comunicación con uno mismo para la prevención de enfermedades y promoción de un estado de salud integral.</p>
                  <div style="padding-left:2em;">
                     <h3>Ejes Tem&aacute;ticos:</h3>
                     <p class="marzo">Reducción y manejo del estrés.</p>
                     <p class="marzo">Desintoxicación, purificación y rejuvenecimiento.</p>
                     <p class="marzo">Nutrición equilibrada y cuidados para mantener la salud.</p>
                     <p class="marzo">Trabajo de la confianza en uno mismo.</p>
                     <p class="marzo">Desarrollo emocional y transformación interior.</p>
                     <p class="marzo">Encuentro y desarrollo espiritual.</p>
                     <p>&nbsp;</p>
               	</div>
               </div>
               
               
               
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
             
               <div class="highlights-box" id="highlights-box-noscroll">
                  <h3 style="margin-left: 0.5em;">Talleres</h3>
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