<div id="bd">
		<div class="c90">
			<?php 
				$left = $list['left'];
				$center = $list['center'];
				$right = $list['right'];
			?>
			<div class="yui-gb"> 
				<div class="yui-u first">
					<?php 
						if(is_array($left)){
							foreach($left as $key=>$val){
								echo '<h3 class="marzo">'.$val['name'].'</h3>
									<h4>'.$val['desci'].'</h4>
									<p><a href="'.$val['url'].'" target="_blank">'.$val['url'].'</a></p>';
							}
						}
						
					?>
				</div>
				<div class="yui-u">
					<?php 
						if(is_array($center)){
							foreach($center as $ckey=>$cval){
								echo '<h3 class="marzo">'.$cval['name'].'</h3>
									<h4>'.$cval['desci'].'</h4>
									<p><a href="'.$cval['url'].'" target="_blank">'.$cval['url'].'</a></p>';
							}
						}
						
					?>
				</div>
				<div class="yui-u">
					<?php 
						if(is_array($right)){
							foreach($right as $rkey=>$rval){
								echo '<h3 class="marzo">'.$rval['name'].'</h3>
									<h4>'.$rval['desci'].'</h4>
									<p><a href="'.$rval['url'].'" target="_blank">'.$rval['url'].'</a></p>';
							}
						}
						
					?>	
				</div>
			</div> 
		</div>
	</div>