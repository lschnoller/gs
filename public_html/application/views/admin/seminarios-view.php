<?php
if(isset($edit)){
	$edit = 'default-tab';
	$listing='';
}else{
	$listing = 'default-tab';
	$edit='';
}

$me = 'seminarios';
?>
	<div class="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->			
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>Seminarios</h3>				
					<ul class="content-box-tabs">
						<li><a href="<?php echo base_url()?>admin_<?=$me?>" id="listing-tab" class="<?=$listing?>">List</a></li> <!-- href must be unique and match the id of target div -->
						<li><a href="<?php echo base_url()?>admin_<?=$me?>/edit/0" id="addedit-tab" class="<?=$edit?>">Add New</a></li>
					</ul>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					<?php if($listing == 'default-tab') {?>
					<div class="tab-content <?=$listing?>" id="listing"> <!-- This is the target div. id must match the href of this div's tab -->	
						<?php if(isset($message)) echo $message;?>
						<script>function redirect(link){
					window.location.replace(link);
				}</script>
						<table>
							<thead>
								<tr>
									<th>Cursos
										<div class="order-elements">
											<a href="<?php echo base_url()?>admin_seminarios/index/title/desc" class="up"></a>
											<a href="<?php echo base_url()?>admin_seminarios/index/title/asc" class="down"></a>
										</div>
									</th>
									<th>
										<div class="order-elements">
											<a href="<?php echo base_url()?>admin_seminarios/index/seminarios_cats_id/desc" class="up"></a>
											<a href="<?php echo base_url()?>admin_seminarios/index/seminarios_cats_id/asc" class="down"></a>
										</div>Category
											<?php 
												echo '<select name="filtercat" onchange="redirect(this.value)">';
												echo '<option value="0">Group by Category</option>';
												if(is_array($cats)){
													foreach ($cats as $xkey => $xval){
														if($seccat == $xkey)
															$sec = 'selected = "selected"';
														else
															$sec = '';
														echo '<option '.$sec.' value="'.base_url().'admin_seminarios/index/title/asc/'.$xkey.'">'.$xval['name'].'</option>';
													}
												}
												echo '</select>';
											?>
									</th>
									<th width="60">Action
									</th>
								</tr>							
							</thead>
						 
							<tbody>	
								<?php
								if(is_array($list)) {
									foreach ($list as $key=>$val){
										$proCat = '--------';
										if(isset($cats[$val['seminarios_cats_id']]['name']))
											$proCat = $cats[$val['seminarios_cats_id']]['name'];
										
										if($seccat == 0)
											echo list_item($val['status'],$key,'admin_'.$me,$val['title'],$proCat);
										else
											echo list_item($val['status'],$key,'admin_'.$me,$val['title'],$proCat);
									}
								}
								?>						
							</tbody>
							<tfoot>
							<?php $this->pcfunc->itemPerPage($me);?>
							</tfoot>
							
						</table>
						
					</div> <!-- End #tab1 -->
					<?php }else{?>
					<div class="tab-content <?=$edit?>" id="addedit">
					
						<form action="?" method="post"  enctype="multipart/form-data" >
							<?php 
							if(validation_errors())
								echo msg_error(validation_errors());
							?>
							
							<fieldset> 
							</script>

								<?php	
								if(is_array($cats)){
									$pcatsArr['0']='Select Category';
									foreach ($cats as $pkey=>$pval){
										$pcatsArr[$pkey]=$pval['name'];	
									}
									
									echo form_dropdown(true,'Category','seminarios_cats_id',$pcatsArr,$values['seminarios_cats_id']);
								}						
								echo form_input(true,'Title','title',set_value('title',$values['title']));
								echo form_input(true,'Subtitle','subtitle',set_value('subtitle',$values['subtitle']));
								echo form_textarea(true,'Description','description',set_value('description',$values['description']));
								echo form_input(true,'Date Text','date_text',set_value('date_text',$values['date_text']));
								echo form_hr();
								echo form_submit('submit','Submit');
								?>								
							</fieldset>
							
							<div class="clear"></div><!-- End .clear -->
							
						</form>
						
					</div> <!-- End #tab2 -->  
					<?php }?>      
				</div> <!-- End .content-box-content -->
			</div> <!-- End .content-box -->			
			<div class="clear"></div>		