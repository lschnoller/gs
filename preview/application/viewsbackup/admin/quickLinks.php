<?php /************************ LIST ************************/ 
$meLink = 'quickLinks';
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
<script language="javascript">
	  	function ponervalores(cual){
	  		document.f.i.value = cual;
	  	}
	  	
	  	function abrir(){
	  		p_i = (screen.availWidth - 770)/2;
			  p_s = (screen.availHeight - 400)/2;
			  window.open('<?php echo base_url();?>inc/imageBrowser/imageChoser.php?nro=0','ic','width=770,height=400,top='+p_s+',left='+p_i+',scrollbars=no');
	  	}
</script>

<table width="900" cellpadding="0" cellspacing="0" align="center">
  <tr class="list dark">
    <td width="250">Title :</td>
    <td><input type="text" name="title" value="<?php echo set_value('title',$values['title']); ?>">*</td>
  </tr>
  
  <tr class="list">
    <td width="250">Status :</td>
    <td><input type="checkbox" name="status" value="1" <?php echo set_checkbox('status',1,$values['status']); ?> /></td>
  </tr>
  <tr class="list dark">
    <td width="250">URL :</td>
    <td><input type="text" name="url" value="<?php echo set_value('url',$values['url']); ?>" size="30">* </td>
  </tr>
  <tr class="list">
    <td width="250">Image :</td>
    <td><input type="text" name="i" value="<?php echo set_value('i',$values['image_url']); ?>" size="30"><input type="button" name="lc" value="Browse" onClick="abrir()">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">Description :</td>
    <td><textarea id="desci" name="description"><?php echo set_value('description',$values['description']); ?></textarea></td>
  </tr>
</table>

<div id="submit">
	<input type="submit" value="Submit" >
</div>

</form>
<?php }?>