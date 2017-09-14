	<div id="bd">
		<div class="c90">
			<?php 
				if(is_array($list)){
					foreach ($list as $val){
						echo '<h5 class="quote">'.$val['quote'].'</h5>';
						echo '<h3 class="author">'.$val['author'].'</h3>';
					}
				}
			?>
			
		</div>
	</div>