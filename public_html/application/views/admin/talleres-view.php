<?php
if(isset($edit)){
	$edit = 'default-tab';
	$listing='';
}else{
	$listing = 'default-tab';
	$edit='';
}

$me = 'talleres';
?>
	<div class="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->			
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>Talleres</h3>				
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
								echo list_head('admin_'.$me,'Title','title','Date','course_date');
								?>
							</thead>
						 
							<tbody>
								<?php
								if(is_array($list)) {
									foreach ($list as $key=>$val){
										echo list_item($val['status'],$key,'admin_'.$me,$val['title'],$val['course_date']);
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
							<link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui-1.8.custom.css" type="text/css" media="screen" />
							<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.8.custom.min.js"></script>
							<script type="text/javascript">
							$(function() {
								$("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' } );
							});
							</script>

								<?php							
								echo form_input(true,'Title','title',set_value('title',$values['title']));
								echo form_input(true,'Subtitle','subtitle',set_value('subtitle',$values['subtitle']));
								echo form_input(true,'Course Date','course_date',set_value('course_date',$values['course_date']),'id="datepicker" readonly="readonly"');
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