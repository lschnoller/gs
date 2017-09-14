<div id="bd">
		<div class="c90">
			<div class="yui-g">
				<div class="yui-u first">
					<h3>MODALIDADES DE PAGO</h3>
					<p>consisten en la utilización y combinación de distintos medios informáticos (e-mail, chat, foros, etc.), el seguimiento de un tutor de nuestro equipo, y la aplicación de un tipo de didáctica que promueve el aprendizaje cooperativo entre los cursantes. </p>
					<h3>PARA RESIDENTES EN ARGENTINA</h3>
					<p class="marzo">Depósito en Caja de Ahorro del Banco Francés. Podrá consultarnos por la sucursal más cercana a su domicilio. (descuento 10%)</p>
					<p class="marzo">Tarjeta de crédito directamente desde nuestro sitio web, en forma práctica y segura, con cualquier tarjeta (viá PayPal)</p>
					<h3>PARA RESIDENTES EN EL EXTERIOR </h3>
					<p class="marzo">Tarjeta de crédito directamente desde nuestro sitio web, en forma práctica y segura, con cualquier tarjeta. (viá PayPal)</p>
					<p>Una vez seleccionado la forma de pago, completa el formulario de inscripción. </p>
					<h3>PASOS A SEGUIR</h3>
					<p><span class="orange">1)</span> Envía todos los datos que se consignan en el Formulario de Inscripción. Espera nuestra confirmaciòn con el importe para abonar.</p>
					<p><span class="orange">2)</span> Procede a relizar el pago correspondiente. Una vez que haya efectuado el pago, por favor envíanos el comprobante por fax o por mail escaneado,  y/o los datos de la operación (medio de pago, números de la transacción, sucursal, monto, fecha...) a info@biodinamica-ayurveda.com</p>
					<p><span class="orange">3)</span> Cuando los fondos se hayan acreditado, se asentará la inscripción definitiva y te lo comunicaremos por e-mail. Esto permitirá que nuestros web masters habiliten tu contraseña personal para que puedas ingresar a nuestro Campus Virtual.</p>
					
				</div>
				<style>
					fieldset label{display: block;margin: .5em 0;}
					fieldset input{width: 85%;padding: .3em .8em;border: 1px solid #999999;}
					fieldset textarea{width: 85%;height:5em;padding: .3em .8em;border: 1px solid #999999;}
				</style>
				<div class="yui-u">
					<h3>FORMULARIO DE INSCRIPCION</h3>
					<?php 
			   			if($send){
			   				echo '<h1>El mensaje ha sido enviado. Graicas por comunicarse con nosotros.</h1>';
			   			}else{
			   		?>
					<form action="?" name="myform" method="post">
					<fieldset>
						<label>Nombre</label>
						<input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"/>
						<label>Apellido</label>
						<input type="text" name="apellido" value="<?php echo set_value('apellido'); ?>"/>
						<label>Fecha de nacimiento</label>
						<input type="text" name="fecha" value="<?php echo set_value('fecha'); ?>"/>
						<label>Ocupación</label>
						<input type="text" name="ocupa" value="<?php echo set_value('ocupa'); ?>"/>
						<label>Dirección</label>
						<input type="text" name="direc" value="<?php echo set_value('direc'); ?>"/>
						<label>Teléfono</label>
						<input type="text" name="tel" value="<?php echo set_value('tel'); ?>"/>
						<label>Email</label>
						<input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
						<label>Curso que quieres realizar</label>
						<input type="text" name="curso" value="<?php echo set_value('curso'); ?>"/>
						<label>Modalidad de pago: (deposito bancario o PayPal)</label>
						<input type="text" name="paypal" value="<?php echo set_value('paypal'); ?>"/>
						<label>Describe que te motivó a realizar este curso</label>
						<textarea name="desci"><?php echo set_value('desci'); ?></textarea>
						<a class="mas fr orange" href="javascript:document.myform.submit()">Envair</a>
					</fieldset>
					</form>
					<?php }?>
				</div>
			</div>
			<div class="phone redish">
				Para reservar una entrevista o saber más,<br/>
				llámenos al <strong>4822-3498 o 4821-6721</strong>,<br/>
				de lunes a viernes, de 14 a 19 horas.
			</div>
		</div>
	</div>