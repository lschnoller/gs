<html>

	<head>

		<title>Image Browser</title>

		<style type="text/css">

			td{font-size:10px;font-family:verdana;color:#333333;}

			a{text-decoration:none}

			a:hover{text-decoration:underline}

			.espacio{font-size:3px;height:10px;}

	  </style>

	</head>

  <body bgcolor="#E5E5E5" topmargin=0 leftmargin=10 rightmargin=0 scroll=yes>

  	<table width="100%" border=0 cellspacing=0 cellpadding=0>

<?

if(isset($_POST['carpeta'])){

	$carpeta = $_POST['carpeta'];

	echo 'file name: ' . $_FILES['upload']['name'] . '<br />';
	echo 'file upload: ' . $_FILES['upload'] . '<br />';	
	echo 'carpeta: ' . $carpeta . '<br />';
	$carpeta = $carpeta.''.$_FILES['upload']['name'];
 	move_uploaded_file($_FILES['upload']['tmp_name'], $carpeta);

  $imagen = $_FILES['upload']['name'];

?>

<tr><td class="espacio">&nbsp;</td></tr>

<tr><td align=center><b>File upload succesfull, for preview please close this popup and open it again!</b></td></tr>

<tr><td class="espacio">&nbsp;</td></tr>

<?

}

else{

?>

<tr><td class="espacio">&nbsp;</td></tr>

<?

include 'sizer.inc.php';

$nc = count($carpeta);

$sn = split("/",$_GET['carpeta']);

$vm = "";

for($i=0;$i<=$nc-1;$i++){

	if($carpeta[$i] == $sn[2]){

		$vm = $titulo[$i];

	}

}



if($vm == ""){

  $folder = "/";

}

else{

	$folder = "/" . $vm . "/";

}

?>

<tr><td align=center><b>Upload to folder "<? echo $folder; ?>"</b></td></tr>

<tr><td class="espacio">&nbsp;</td></tr>

<form name="altap" method="post" action="upload.php" enctype="multipart/form-data">

<input type="hidden" name="MAX_FILE_SIZE" value="512000">

<input type="hidden" name="carpeta" value="<? echo $_GET['carpeta']; ?>">

<tr><td align=right style="padding-right:10px"><input name="upload" type="file" size="35"></td></tr>

<tr><td class="espacio">&nbsp;</td></tr>

<tr><td class="espacio">&nbsp;</td></tr>

<tr><td align=right style="padding-right:10px"><input type="submit" value="Upload"></td></tr>

</form>

<tr><td class="espacio">&nbsp;</td></tr>

<?

}

?>

    </table>

  </body>

</html>