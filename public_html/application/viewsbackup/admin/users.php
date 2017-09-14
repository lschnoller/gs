<?php /************************ LIST ************************/ 
$meLink = 'users';
?>
<?php if($list){?>
<h2><a href="<?php echo base_url();?>admin/<?php echo $meLink;?>/form">Add New</a></h2>
<?php echo $message;?>
<table id="titles">
  <tr>
    <td width="20">#</td>
    <td >Name</td>
    <td >Email</td>
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
				<td><a href="#">'.$val['first_name'].' '.$val['last_name'].'</a></td>
				<td><a href="#">'.$val['email'].'</a></td>
				<td width="40"><a class="edit buttons" href="'.base_url().'admin/'.$meLink.'/form/'.$key.'"> </a></td>
				<td width="40"><a class="delete buttons" href="'.base_url().'admin/'.$meLink.'/del/'.$key.'" onclick="return confirm(\'Are you sure you want to delete ()?\');"> </a></td>
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
    <td width="250">Email :</td>
    <td><input type="text" name="email" value="<?php echo set_value('email',$values['email']); ?>">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">Password :</td>
    <td><input type="password" name="password" value="<?php echo set_value('password',$values['password']); ?>">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">Re-type Password :</td>
    <td><input type="password" name="passwordconf" value="<?php echo set_value('password',$values['password']); ?>">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">First Name :</td>
    <td><input type="text" name="first_name" value="<?php echo set_value('first_name',$values['first_name']); ?>">*</td>
  </tr>
  <tr class="list dark">
    <td width="250">Last Name :</td>
    <td><input type="text" name="last_name" value="<?php echo set_value('last_name',$values['last_name']); ?>">*</td>
  </tr>
  
</table>

<div id="submit">
	<input type="submit" value="Submit" >
</div>

</form>
<?php }?>