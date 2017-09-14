<?php
if(isset($edit)){
	$edit = 'default-tab';
	$listing='';
}else{
	$listing = 'default-tab';
	$edit='';
}

$me = 'cursos';
?>
	<div class="main-content"> <!-- Main Content Section with everything -->
			<!-- Page Head -->			
			<div class="clear"></div> <!-- End .clear -->
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>Cursos</h3>				
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
											<a href="<?php echo base_url()?>admin_cursos/index/title/desc" class="up"></a>
											<a href="<?php echo base_url()?>admin_cursos/index/title/asc" class="down"></a>
										</div>
									</th>
									<th>
										<div class="order-elements">
											<a href="<?php echo base_url()?>admin_cursos/index/cursos_cats_id/desc" class="up"></a>
											<a href="<?php echo base_url()?>admin_cursos/index/cursos_cats_id/asc" class="down"></a>
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
														echo '<option '.$sec.' value="'.base_url().'admin_cursos/index/title/asc/'.$xkey.'">'.$xval['name'].'</option>';
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
										if(isset($cats[$val['cursos_cats_id']]['name']))
											$proCat = $cats[$val['cursos_cats_id']]['name'];
										
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
					
						<form action="?" method="post"  enctype="multipart/form-data" id="mainForm"> <!-- use id for the yui simple editor event -->
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
								if(is_array($cats)){
									$pcatsArr['0']='Select Category';
									foreach ($cats as $pkey=>$pval){
										$pcatsArr[$pkey]=$pval['name'];	
									}
									
									echo form_dropdown(true,'Category','cursos_cats_id',$pcatsArr,$values['cursos_cats_id']);
								}						
								echo form_input(true,'Title','title',set_value('title',$values['title']));
								echo form_input(true,'Subtitle','subtitle',set_value('subtitle',$values['subtitle']));
								echo form_input(true,'Course Date','course_date',set_value('course_date',$values['course_date']),'id="datepicker" readonly="readonly"');
								//$data = array('name' => '
								
								echo form_textarea(true,'Description','description',set_value('description',$values['description']), 'id="descEditor"'); //id needed for yui editor
								?>
								<script type="text/javascript">
								(function() {
                            //Setup some private variables
                            var Dom = YAHOO.util.Dom,
                                Event = YAHOO.util.Event;
                        
                                //The SimpleEditor config
                                var myConfig = {
                                    height: '300px',
                                    width: '600px',
                                    //dompath: true,
                                    focusAtStart: true
                                };                        
                            var myEditor = new YAHOO.widget.SimpleEditor('descEditor', myConfig);
                            myEditor.render();									 
									 //On form submit save html to text area. Initialize event handler after the Editor is rendered
									 YAHOO.util.Event.on('mainForm', 'submit', function() {
										 //Put the HTML back into the text area
										 myEditor.saveHTML();
									 });
                        })();
								</script>
								<?php
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