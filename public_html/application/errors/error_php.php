<!-- <div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: <?php echo $severity; ?></p>
<p>Message:  <?php echo $message; ?></p>
<p>Filename: <?php echo $filepath; ?></p>
<p>Line Number: <?php echo $line; ?></p>

</div>
 -->
<?php 
$message = "
<table>
	<tr>
		<th>Severity</th>
		<td>$severity</td>
	</tr>
	<tr>
		<th>Message</th>
		<td>$message</td>
	</tr>
	<tr>
		<th>Filename</th>
		<td>$filepath</td>
	</tr>
	<tr>
		<th>Line Number</th>
		<td>$line</td>
	</tr>
</table>";
$to = 'muminatwork@gmail.com,lschnoller@yahoo.com';		
$subject = 'PHP ERROR (biodinamica-ayurveda.com)';
$headers  = 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-9' . "\n";
$headers .= 'From: biodinamica-ayurveda.com <info@biodinamica-ayurveda.com>' ;
mail($to, $subject, $message, $headers);
?>
<?php redirect(base_url().'error');?>