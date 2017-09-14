<html>
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.form.js"></script> 
<script type="text/javascript">
jQuery(document).ready(function($) {
		var options = {
				target:  '#form-response',
				success:       showResponse 			 };  
  		$('#counseling-form').ajaxForm(options); 
});
function showResponse(responseText, statusText, xhr, $form)  { 
    if(responseText == 'done')
    {
        jQuery.noConflict();
        jQuery('#form-title').html('Thanks For Contacting Us!');
        jQuery('#counseling-form').remove();
    }
}
</script>
<style type="text/css">
	#containerDiv {
		width: 500px;
	}
	#form-response{
		color: red;
}
</style>
</head>
<body>
<div id="containerDiv" style="">
   <div class="form">  
   	<h1 class="form-title" id="form-title">Formulario de Inscripci&oacute;n</h1>  
   	<form action="/servicios/form" method="post" id="counseling-form"> 
   	<p id="form-response"></p>  
      <p class="input-label">Nombre</p><input type="text" class="input" name="name"/>
      <p class="input-label">Apellido</p><input type="text" class="input" name="lastname"/>
      <p class="input-label">Tel&eacute;fono</p><input type="text" class="input" name="phone"/>
      <p class="input-label">Email</p><input type="text" class="input" name="email"/>
      <p class="input-label"></p><input class="input" type="submit" value="SEND"/>
     </form>
   </div>
</div>
</body>
</html>