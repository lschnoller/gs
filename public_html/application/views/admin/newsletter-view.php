<?php
if(isset($edit)){
	$edit = 'default-tab';
	$listing='';
}else{
	$listing = 'default-tab';
	$edit='';
}

$me = 'newsletter';
?>
	<div class="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->			
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>News Letter</h3>				
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
						<table>
							<thead>
								<?php 
								echo list_head('admin_'.$me,'Title','title','&nbsp;','','&nbsp;','','&nbsp;','');
								?>
							</thead>
						 
							<tbody>
								<?php
								if(is_array($list)) {
									foreach ($list as $key=>$val){
										echo list_item(-1,$key,'admin_'.$me,$val['title'],'<a href="'.base_url().'admin_newsletter/preview/'.$key.'" target="_blank">preview</a>','<a href="'.base_url().'admin_newsletter/code/'.$key.'"  target="_blank">get the code</a>','<a href="'.base_url().'admin_newslettersub/index/'.$key.'">subs</a>');
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
							if($this->upload->display_errors())
								echo msg_error($this->upload->display_errors());
							?>
							
							<fieldset> 
								<?php							
								echo form_input(true,'Title','title',set_value('title',$values['title']));
								echo form_input(true,'Main Article','main_article',set_value('main_article',$values['main_article']));
								echo form_upload(true,'Image','image_url','','','(xxpx X xxpx)',$values['image_url']);
								echo form_textarea(true,'Main Description','main_desci',set_value('main_desci',$values['main_desci']));
								echo form_input(true,'URL','url',set_value('url',$values['url']));
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