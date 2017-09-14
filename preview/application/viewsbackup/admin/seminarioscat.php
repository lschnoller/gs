<?php /************************ LIST ************************/ 
$meLink = 'seminarioscat';
?>
<?php if($list){?>
<h2><a href="<?php echo base_url();?>admin/<?php echo $meLink;?>/form">Add New</a></h2>
<?php echo $message;?>
<table id="titles">
  <tr>
    <td width="20">#</td>
    <td >Name</td>
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
				<td><a href="#">'.$val['name'].'</a></td>
				<td width="40"><a class="edit buttons" href="'.base_url().'admin/'.$meLink.'/form/'.$key.'"> </a></td>
				<td width="40"><a class="delete buttons" href="'.base_url().'admin/'.$meLink.'/del/'.$key.'" onclick="return confirm(\'Are you sure you want to delete?\');"> </a></td>
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

<table width="900" cellpadding="0" cellspacing="0" align="center">
  <tr class="list dark">
    <td width="250">Name :</td>
    <td><input type="text" name="name" value="<?php echo set_value('name',$values['name']); ?>">*</td>
  </tr>
  <tr class="list">
    <td width="250">Description :</td>
    <td><textarea name="description" id="desci"><?php echo set_value('description',$values['description']); ?></textarea>*</td>
  </tr>
</table>

<div id="submit">
	<input type="submit" value="Submit" >
</div>

</form>
<?php }?>