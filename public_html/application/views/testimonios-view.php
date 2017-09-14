	<div id="bd">
		<div class="c90">
      	<div class="yui-gc">
         	<div class="yui-u first">
			<?php 
				if(is_array($list)){
					foreach ($list as $val){
						echo '<h5 class="quote">'.$val['quote'].'</h5>';
						echo '<h3 class="author">'.$val['author'].'</h3>';
						echo '<h3 class="profession">'.$val['profession'].'</h3>';
					}
				}
			?>
         	</div>
			</div>
		</div>
	</div>