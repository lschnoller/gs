<?php /************************ LIST ************************/ 
$meLink = 'addresses';
?>
<?php if($list){?>
<h2><a href="<?php echo base_url();?>admin/<?php echo $meLink;?>/form">Add New</a></h2>
<?php echo $message;?>
<table id="titles">
  <tr>
    <td width="20">#</td>
    <td >Name</td>
    <td >Zip</td>
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
				<td><a href="#">'.$val['zip'].'</a></td>
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
    <td width="250">User :</td>
    <td>
		<select name="user_id">
			<option value="0">Chose User</option>
			<?php 
			if(is_array($users)){
				foreach ($users as $key => $val) {
					if($key == $values['user_id']){
						$sec = TRUE;
					}else{
						$sec = FALSE;
					}
					echo '<option value="'.$key.'" '.set_select('user_id',$key,$sec).'>'.$val['first_name'].' '.$val['last_name'].'</option>';
				}
			}
			?>
		</select>
	*</td>
  </tr>
<tr class="list dark">
    <td width="250">Phone 1 :</td>
    <td><input type="text" name="phone1" value="<?php echo set_value('phone1',$values['phone1']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">Phone 2 :</td>
    <td><input type="text" name="phone2" value="<?php echo set_value('phone2',$values['phone2']); ?>"></td>
  </tr>
<tr class="list dark">
    <td width="250">Address :</td>
    <td><input type="text" name="address" value="<?php echo set_value('address',$values['address']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">Apt :</td>
    <td><input type="text" name="apt" value="<?php echo set_value('apt',$values['apt']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">City :</td>
    <td><input type="text" name="city" value="<?php echo set_value('city',$values['city']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">State :</td>
    <td><input type="text" name="state" value="<?php echo set_value('state',$values['state']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">Zip :</td>
    <td><input type="text" name="zip" value="<?php echo set_value('zip',$values['zip']); ?>">*</td>
  </tr>
<tr class="list dark">
    <td width="250">Country :</td>
    <td><input type="text" name="country" value="<?php echo set_value('country',$values['country']); ?>">*</td>
  </tr>
  
</table>

<div id="submit">
	<input type="submit" value="Submit" >
</div>

</form>
<?php }?>