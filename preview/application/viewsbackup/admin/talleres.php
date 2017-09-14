<?php /************************ LIST ************************/ 
$meLink = 'talleres';
?>
<?php if($list){?>
<h2><a href="<?php echo base_url();?>admin/<?php echo $meLink;?>/form">Add New</a></h2>
<?php echo $message;?>
<table id="titles">
  <tr>
    <td width="20">#</td>
    <td >Title</td>
    <td width="80">Status</td>
    <td width="40">edit</td>
    <td width="40">del</td>
  </tr>
</table>

<?php 
$i = 1;
if(is_array($list)){
	echo '<table width="900" cellpadding="0" cellspacing="0" align="center">';
	foreach ($list as $key => $val){
		if($i % 2 != 0){
			$class = 'dark';
		}else{
			$class = '';
		}
		echo '
			<tr class="list '.$class.'">
				<td  width="20"><a href="#">'.$i.'</a></td>
				<td><a href="#">'.$val['title'].'</a></td>
				<td width="80"><a href="#">'.$val['status'].'</a></td>
				<td width="40"><a class="edit buttons" href="'.base_url().'admin/'.$meLink.'/form/'.$key.'"> </a></td>
				<td width="40"><a class="delete buttons" href="'.base_url().'admin/'.$meLink.'/del/'.$key.'" onclick="return confirm(\'Are you sure you want to delete ('.$val['title'].')?\');"> </a></td>
			</tr>
		';
		$i++;
	}
	echo '</table>';
}
}else{
	echo '<h2><a href="'.base_url().'admin/'.$meLink.'">Back to Listing</a></h2>';
 /************************ ADD - MODIFY ************************/ 
	$config=array('name'=>'f');
	echo form_open_multipart(base_url().'admin/'.$meLink.'/form/'.$id,$config);
	echo $message;
	if(validation_errors()){
		echo '<div id="error">'.validation_errors().'</div>';
	}
	
	?>
<script type="text/javascript" src="<?php echo base_url();?>inc/fckeditor/fckeditor.js"></script>
<script type="text/javascript">

	window.onload = function()
	{
		var sBasePath = '<?php echo base_url();?>inc/fckeditor/';//document.location.href.substring(0,document.location.href.lastIndexOf('_samples')) ;
	
		var oFCKeditor = new FCKeditor( 'description' ) ;
		oFCKeditor.BasePath	= sBasePath ;
		oFCKeditor.ReplaceTextarea() ;
		
	}

</script>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>inc/dhtmlgoodies_calendar/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="<?php echo base_url();?>inc/dhtmlgoodies_calendar/dhtmlgoodies_calendar.js?random=20060118"></script>

<table width="900" cellpadding="0" cellspacing="0" align="center">
  <tr class="list dark">
    <td width="250">Title :</td>
    <td><input type="text" name="title" value="<?php echo set_value('title',$values['title']); ?>">*</td>
  </tr>
  <tr class="list">
    <td width="250">Subtitle :</td>
    <td><input type="text" name="subtitle" value="<?php echo set_value('subtitle',$values['subtitle']); ?>">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">Status :</td>
    <td><input type="checkbox" name="status" value="1" <?php echo set_checkbox('status',1,$values['status']); ?> /></td>
  </tr>
  <tr class="list">
    <td width="250">Course Date :</td>
    <td><input type="text" name="course_date" value="<?php echo set_value('course_date',$values['course_date']); ?>" size="30" readonly="readonly">* <input type="button" onclick="displayCalendar(document.forms[0].course_date,'yyyy-mm-dd',this)" value="Select Date" /></td>
  </tr>
  <tr class="list dark">
    <td width="250">Date Text :</td>
    <td><input type="text" name="date_text" value="<?php echo set_value('date_text',$values['date_text']); ?>" size="30">*</td>
  </tr>
  <tr class="list">
    <td width="250">Description :</td>
    <td><textarea id="description" name="description"><?php echo set_value('description',$values['description']); ?></textarea>*</td>
  </tr>
</table>

<div id="submit">
	<input type="submit" value="Submit" >
</div>

</form>
<?php }?>