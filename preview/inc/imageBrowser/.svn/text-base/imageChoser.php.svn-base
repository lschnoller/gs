<html>

	<head>

		<title>Image Browser</title>

	</head>

	<script language="javascript">

		function llamar_c(pagina,donde,carpeta){

			window.open(pagina,donde);

			document.getElementById('c').value = "/Library/WebServer/Documents/gs/images/quickLinks/" + carpeta + "/";

		}

		

		function llamar_a(pagina,dir,arch,donde,lya,r,nc){

			window.open(pagina + "?path=" + dir + "&file="+arch,donde);

			document.getElementById('sel').innerHTML = nc + " > " + arch;

			if(r != ""){

				mr = "(required size: " + r + "px)";

			}

			else{

				mr = "";

			}
			document.getElementById('dim').innerHTML = lya + "px " + mr;
			document.getElementById('i').value = dir + arch;
		}

		

		function pasarvalores()
		{
			window.opener.ponervalores(document.getElementById('i').value,<? echo $_GET['nro']; ?>);
			
		}

		

		function upload(){

			p_i = (screen.availWidth - 300)/2

			p_s = (screen.availHeight - 80)/2

			window.open('upload.php?carpeta=' + document.getElementById('c').value,'previa');

		}

	</script>

  <body bgcolor="#FFFFFF" topmargin=0 leftmargin=0 rightmargin=0 scroll=no>

  	<table width=770 border=0 cellpadding=0 cellspacing=0 align=center>

  		<tr>

  			<input type="hidden" id="i" value="">

  			<input type="hidden" id="c" value="/Library/WebServer/Documents/gs/images/quickLinks/">

  			<td colspan=4 height=46 bgcolor="#36A9CC" style="color:#FFFFFF;font-family:arial;font-size:20px;"><img src="pixel.gif" width=10 height=1>Image Browser</td>

  			<td bgcolor="#36A9CC" style="color:#FFFFFF;font-family:verdana;font-size:10px;">

  				<b>Selected image:</b> <span id="sel" style="color:#FFFFFF;font-family:verdana;font-size:10px;"></span><br>

          <b>Image size:</b>  <span id="dim" style="color:#FFFFFF;font-family:verdana;font-size:10px;"></span>

        </td>

  		</tr>

  		<tr>

  			<td colspan=5 height=10 style="font-size:3px;">&nbsp;</td>

  		</tr>

  		<tr>

  			<td width=180><iframe name="carpetas" src="carpetas.php" frameborder=0 width=180 height=300></iframe></td>

  			<td width=10 style="font-size:3px;">&nbsp;</td>

  			<td width=190><iframe name="archivos" src="archivos.php" frameborder=0 width=190 height=300></iframe></td>

  			<td width=10 style="font-size:3px;">&nbsp;</td>

  			<td width=380><iframe name="previa" src="previa.php" frameborder=0 width=380 height=300></iframe></td>

  		</tr>

  		<tr>

  			<td colspan=5 height=10 style="font-size:3px;">&nbsp;</td>

  		</tr>

  		<tr>

  			<td colspan=5 bgcolor="#e5e5e5" height=39>

  				<table width=770 border=0 cellpadding=0 cellspacing=0>

  					<td width=10>&nbsp;</td>

  					<td width=367 bgcolor="#CCCCCC" onMouseOut="bgColor='#CCCCCC'" onMouseOver="bgColor='#DDDDDD'" height=19 style="font-family:verdana;font-size:10px;color:#000000;font-weight:bold;cursor:pointer;" onClick="upload()"><img src="pixel.gif" width=10 height=1>Upload new image from disk</td>

  					<td>&nbsp;</td>

  					<td width=70 bgcolor="#E5C96A" onMouseOut="bgColor='#E5C96A'" onMouseOver="bgColor='#FFDB76'" height=19 style="font-family:verdana;font-size:10px;color:#333333;font-weight:bold;cursor:pointer;" align=center onClick="pasarvalores();window.close();">OK</td>

  					<td width=10>&nbsp;</td>

  					<td width=70 bgcolor="#CCCCCC" onMouseOut="bgColor='#CCCCCC'" onMouseOver="bgColor='#DDDDDD'" height=19 style="font-family:verdana;font-size:10px;color:#333333;font-weight:bold;cursor:pointer;" align=center onClick="window.close();">CANCEL</td>

  					<td width=10>&nbsp;</td>

  			  </table>

  			</td>

  		</tr>

  	</table>

  </body>

</html>