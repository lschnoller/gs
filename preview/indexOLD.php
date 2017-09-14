<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Biodinamica - Ayurveda</title>
<style>
	html, body {
		background-color:#DEDEDE;
		text-align:center;
	}
	body {
		padding:0;
		margin:0;
	}
	input{
		font:14px "Trebuchet MS", Arial, sans-serif;
		border:none;
	}
	textarea{
		font:12px "Trebuchet MS", Arial, sans-serif;
		border:none;
	}
</style>
<?php 
$submittedMessage = '';
if(isset($_POST['issubmit']) && $_POST['issubmit'] == 'ok'){
	
	$emailsendto = $_POST['email'];
	$emailmessage = $_POST['desci'];
	
	$to  = 'info@biodinamica-ayurveda.com, admin@biodinamica-ayurveda.com';
	//$to  = 'lschnoller@yahoo.com, info@vilaoliva.com.ar';
	$subject = 'LANDING: Recibistes una consulta de '.$emailsendto;
	$message = '<html>'."\n"
  .'<p>Recibistes una consulta de: '.$emailsendto.'</p>'."\n"
  .'<table>'."\n"
    .'<tr>'."\n"
      .'<td>Mensaje: </td>'."\n"
		.'<td>'.$emailmessage.'</td>'."\n"
    .'</tr>'."\n"
  .'</table>'."\n"
.'</html>'."\n";

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$headers .= 'From: <info@biodinamica-ayurveda.com>' . "\r\n";
	$headers .= 'Cc: info@biodinamica-ayurveda.com' . "\r\n";

	if(mail($to, $subject, $message, $headers))
		$submittedMessage = 'El mensaje ha sido enviado. Gracias por comunicarse con nosotros.';
	else
		$submittedMessage = 'Ha habido un problema al enviar el correo. Por favor, intente nuevamente.';
}

?>
</head>

<body style="text-align:center">
<form action="?" method="post" name="myform" id="form1">
<input type="hidden" name="issubmit" value="ok"/>
<div align="left" style="width:100%;">
  <div style="position:relative; background-image: url(landing3.jpg); background-repeat:no-repeat; background-position:top center; width:839px; height:746px; border:none">    
    <div style="position:absolute; top:71px; left:495px;">
      <input type="text" name="email" style="width:300px; height:20px" /></div>
    <div style="position:absolute; top:135px; left:495px; border:none">
      <textarea name="desci" style="width:299px; height:185px;"><?php echo $submittedMessage ?></textarea>
    </div>
    <div style="position:absolute; top:325px; left:725px; width: 70px; height: 30px; padding:0; margin:0; cursor:pointer" onclick="document.forms.myform.submit()">&nbsp;
    </div>    
  </div>
</div>

<!--<div style="position:absolute; top:180px; left:700px;"><input type="text" name="email" /></div>-->
<!--<table width="826" height="600" cellpadding="0" cellspacing="0" align="center" background="VILA-LANDING-WEB3.jpg" >
	<tr>
		<td width="460"></td>
    <td width="320">      
      <table width="320" height="600" cellpadding="0" cellspacing="0" align="center">
          <tr><td width="320" height="197">&nbsp;</td></tr>
          <tr><td width="320" height="18" align="center" valign="middle"><input type="text" name="email" /></td></tr>
          <tr><td width="320" height="51">&nbsp;</td></tr>
          <tr><td width="320" height="125"  align="center" valign="middle"><textarea name="desci"></textarea></td></tr>
          <tr><td>&nbsp;</td><td width="320" height="23"><img border="0" src="images/space.gif" usemap="#formmap"/></td></tr>
          <tr><td width="320" height="100">&nbsp;</td></tr>
      </table>
      <input type="hidden" name="issubmit" value="ok"/>
      <map name="formmap" style="border:1px solid #333; background-color:#FF0000">
        <area shape="rect" coords="250,5,300,23" onclick="document.forms.myform.submit()" style="cursor:pointer;">
      </map>
        
    </td>
    <td width="103"></td>
	</tr>
</table>
-->
</form>

</body>
</html>
