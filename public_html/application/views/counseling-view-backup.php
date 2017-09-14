<style type="text/css">
	#bg_fade {
		background-color:#555555;
		/*height:100%;*/
		left:0px;
		margin:0px;
		padding:0px;
		position:absolute;
		top:0px;
		visibility:hidden;
		/*width:100%;*/
		z-index:1000;
	}
	
	#containerDiv {
		position: absolute;
		width: 30%;
		z-index: 99999;
	}
	
	/*#containerDiv p {
		position: relative;
		height: 10%;
		padding: 10%;
		text-align: center;
		border: 1px blue solid;
		background-color: white;
		z-index: 99999;
	}*/
</style>
<div id="containerDiv" style="display:none">
   <div class="form">  
      <h1 class="form-title">Formulario de Inscripci&oacute;n</h1>             
      <p class="input-label">Nombre</p><input class="input" />
      <p class="input-label">Apellido</p><input class="input" />
      <p class="input-label">Tel&eacute;fono</p><input class="input" />
      <p class="input-label">Email</p><input class="input" />
   </div>
   <p>
      <a id="closeLink" href="javascript:void(0);">Click here</a> to close the lightbox.
   </p>
</div>

<div id="bd">
		<div class="c90">
			<div class="yui-gc"> 
				<div class="yui-u first">
            	<div style="font-size:15px">
                  <p class="intro-text-green">En el Centro Graciela Schnöller te acompañamos en tu camino de autoconocimiento, para que puedas atravesar conflictos, realizar cambios y hacer elecciones apropiadas a tu persona.</p>
                  <h3 class="orange">Counseling</h3>
                  <p>Counseling, o Consulta Psicológica es una relación de ayuda orientada a personas que dentro de un marco de normalidad  viven situaciones difíciles en lo cotidiano. </p>
                  <p>En la consulta construimos un vínculo de confianza invitando a la autoexploración. El objetivo es que puedas conectarte con tus propios recursos para destrabar conflictos, atravesar momentos de crisis y resolver problemas. La finalidad de este proceso es el despliegue personal y espiritual.</p>
                  <p>Nuestra modalidad se fundamenta en la orientación psicoeducativa  de Carl Rogers, que considera que el ser humano está dotado de todas las potencialidades necesarias para su completo desarrollo. </p>
                  <p>Iniciar un proceso de acompañamiento desde el Counseling te facilitará un espacio en donde puedas sentirte verdaderamente libre y seguro como para aventurarte a ser tú mismo.</p>
					</div>
               
               <a id="lightboxLink">Launch lightbox</a>
               
               <div class="phone redish" style="margin-top:3em;">
						Para reservar una entrevista o saber más,<br/>
						llámenos al <strong>4822-3498 o 4821-6721</strong>,<br/>
						de lunes a viernes, de 14 a 19 horas.
					</div>
				</div>
				<div class="yui-u">
            	<div class="msgbox-small" style="width:290px; padding-top:10px; -moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px; width:290px; margin-bottom:1em;"><a href="<?=base_url()?>contactenos">COUNSELING ONLINE<br/><span class="msgbox-2ndline">click aquí</span></a></div>
               
            	<div class="highlights-box" style="margin-left:1.5em">
                  <h3>Ventajas del Counseling</h3>
                  <ul>
                     <li>Clima de calidez y contención en donde puedas expresarte libremente</li>
                     <li>Acompañamiento y facilitación psicoemocional</li>
                     <li>Proceso de terapia breve </li>
                     <li>Trabajo personal orientado al desarrollo del ser</li>
                     <li>Manejo de las emociones reconociendo las conflictivas como señales</li>
                     <li>Desarrollo de la autoestima</li>
                     <li>Crear oportunidades de cambio y de crecimiento en tu vida</li>
                  </ul>
             </div>
             
				</div>
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="<?=base_url()?>js/jquery-1.3.2.min.js"></script>	
   <script type="text/javascript" src="<?=base_url()?>js/scriptaculous.js?load=effects,dragdrop"></script>
	<script type="text/javascript" src="<?=base_url()?>js/lightbox.js"></script>
   <script>
      var test;
      
      Event.observe(window, 'load', function () {
         test = new Lightbox('containerDiv');
      });
      
      Event.observe('lightboxLink', 'click', function () {
         test.open();
      });

      Event.observe('closeLink', 'click', function () {
         test.close();
      });
   </script>