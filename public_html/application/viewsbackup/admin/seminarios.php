<?php /************************ LIST ************************/ 
$meLink = 'seminarios';
?>
<?php if($list){?>
<h2><a href="<?php echo base_url();?>admin/<?php echo $meLink;?>/form">Add New</a></h2>
<?php echo $message;?>
<table id="titles">
  <tr>
    <td width="20">#</td>
    <td >Title</td>
    <td width="80">Category</td>
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
				<td width="80"><a href="#">'.$val['cat'].'</a></td>
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
<table width="900" cellpadding="0" cellspacing="0" align="center">
  <tr class="list">
    <td width="250">Category :</td>
    <td>
    	<select name="category_id">
			<option value="0">Chose Category</option>
			<?php 
			if(is_array($category)){
				foreach ($category as $key => $val) {
					if($key == $values['category_id']){
						$sec = TRUE;
					}else{
						$sec = FALSE;
					}
					echo '<option value="'.$key.'" '.set_select('category_id',$key,$sec).'>'.$val['name'].'</option>';
				}
			}
			?>
		</select>
    *</td>
  </tr>
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
  <tr class="list dark">
    <td width="250">Date :</td>
    <td><input type="text" name="date" value="<?php echo set_value('date',$values['date']); ?>" size="30">*</td>
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