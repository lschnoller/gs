<script type="text/javascript" src="<?=base_url()?>js/jquery-1.3.2.min.js"></script>	
<script type="text/javascript" src="<?php echo base_url();?>js/facebox.js"></script>

<link rel="stylesheet" href="<?php echo base_url();?>css/facebox.css" type="text/css" media="screen" />
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('a[rel*=facebox]').facebox();
});
</script>
<div id="bd">
		<div class="c80">
			<div class="yui-g"> 
			<?php 
				$left = $list['left'];
				$right = $list['right'];
			?>
				<div class="yui-u first">
					<?php 
						if(is_array($left)){
							foreach($left as $key=>$val){
								echo '<h3 class="marzo orange" id="cal_'.$key.'">'.$val['title'].'</h3>
									<h4>'.$val['desci'].'</h4>
									<p>'.$val['date_text'].'</p>';
							}
						}
						
					?>
					<?php 
						if(is_array($right)){
							foreach($right as $rkey=>$rval){
								echo '<h3 class="marzo orange" id="cal_'.$key.'">'.$rval['title'].'</h3>
									<h4>'.$rval['desci'].'</h4>
									<p>'.$rval['date_text'].'</p>';
							}
						}
						
					?>
					<div class="msgbox">Agradecemos su difusión a<br/>quien pueda interesarle</div>
				</div>
				<div class="yui-u">
					<div id="calendar">
                	<?php
						$this->load->view('calendar', $cal);
                    ?>
                    </div>
                    <div style="clear: both;margin-bottom: 20px"></div>
					<!-- <h3 class="marzo orange">Curso de Verano</h3>
					<h4>Masaje Shantala</h4>
					<p>Duración: 1 Jornada<br/>
						<strong>Enero: Sábado de  9.30 a 17 hs.</strong>
					</p> -->
					<div class="phone redish">
						Para reservar una entrevista o saber más,<br/>
						llámenos al <strong>4822-3498 o 4821-6721</strong>,<br/>
						de lunes a viernes, de 14 a 19 horas.
					</div>
				</div>
			</div>
		</div>
	</div>