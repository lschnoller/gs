<html>
<head>
<title>Image Browser</title>
<style type="text/css">
td {
	font-size:10px;
	font-family:verdana;
	color:#333333;
}
a {
	text-decoration:none
}
a:hover {
	text-decoration:underline
}
.espacio {
	font-size:3px;
	height:10px;
}
</style>
<script language="javascript">

	  	m1 = "";

	  	m2 = "";

	  	function marcar(accion,img,dir){

	  		if(accion == "sobre"){

	  			if(m1 != dir){

	  			  document.getElementById(img).src = "doc-over.gif";

	  			  document.getElementById(dir).style.fontWeight = "bold";

	  		  }

	  		}

	  		else{

	  			if(accion == "click"){

	  				if(m1 != ""){

	  				  document.getElementById(m2).src = "doc.gif";

	  			    document.getElementById(m1).style.fontWeight = "";

	  			  }

	  			  

	  			  document.getElementById(img).src = "doc-gold.gif";

	  			  document.getElementById(dir).style.fontWeight = "bold";

            m1 = dir;

            m2 = img;

	  		  }

	  		  else{

	  		  	if(m1 != dir){

	  			    document.getElementById(img).src = "doc.gif";

	  			    document.getElementById(dir).style.fontWeight = "";

	  			  }

	  			}

	  		}

	  	}

	  </script>
</head>
<body bgcolor="#E5E5E5" topmargin=0 leftmargin=10 rightmargin=0 scroll=yes>
<table width="100%" border=0 cellspacing=0 cellpadding=0>
  <tr>
    <td colspan=2 class=espacio>&nbsp</td>
  </tr>
  <?
		$pathbase = "/Library/WebServer/Documents/gs/images/quickLinks/";

		if(isset($_GET['path']))
		{
			$path = $pathbase . $_GET['path'] . "/";
			$pathcorto = $_GET['path'];
		}

		else
		{
			$path = $pathbase;
			$pathcorto = $pathbase;
		}

		$dir = opendir($path);
		$i=0;
		while ($elemento = readdir($dir))
		{ 
			$i++;										
			$ext = substr($elemento,strlen($elemento)-3,3);     	

			if($elemento != "." and $elemento != ".." and ($ext == "png" || $ext == "jpg" || $ext == "gif"))
			{
				$imagedata = getimagesize($path . $elemento);
				$w = $imagedata[0];
				$h = $imagedata[1];           
				include 'sizer.inc.php';
				$nc = count($carpeta);
				$mr = "";
				$tr = "";
				
				for($j=0;$j < $nc;$j++)
				{
					if($mr == "")
					{
						if($carpeta[$j] == $pathcorto)
						{
							$mr = $medidas[$j];
							$tr = $titulo[$j];
						}
					}
				}

				echo "<tr onclick=\"window.parent.llamar_a('previa.php','/". $pathcorto ."','" . $elemento . "','previa','" . $w . " x " . $h . "','" . $mr . "','" . $tr . "');marcar('click','c".$i."','e".$i."')\" style=\"cursor:pointer\" onmouseout=\"marcar('fuera','c".$i."','e".$i."')\" onmouseover=\"marcar('sobre','c".$i."','e".$i."')\"><td width=21><img src=\"doc.gif\" border=\"0\" id=\"c".$i."\"></td><td id=\"e".$i."\">" . $elemento . "</td></tr>\n";

				echo "<tr><td colspan=2 class='espacio'>&nbsp</td></tr>\n";
			}
		}
		
		closedir($dir); 
		
      ?>
</table>
</body>
</html>
