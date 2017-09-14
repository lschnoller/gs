<HTML>
	<head>
		<title>Image Browser</title>
		<style type="text/css">
			td{font-size:10px;font-family:verdana;color:#333333;}
			a{text-decoration:none}
			a:hover{text-decoration:underline}
			.espacio{font-size:3px;height:10px;}
	  </style>
	  <script language="javascript">
	  	function ponervalores(cual){
	  		document.f.i.value = cual;
	  		document.getElementById('mi').innerHTML = "<img src=\"" + cual + "\" border=0>";
	  	}
	  	
	  	function abrir(){
	  		p_i = (screen.availWidth - 770)/2
			  p_s = (screen.availHeight - 400)/2
			  window.open('imageChoser.php?nro=0','ic','width=770,height=400,top='+p_s+',left='+p_i+',scrollbars=no')
	  	}
	  </script>
	</head>
	<body>
		<div id="mi"></div>
		<form name="f"><input type="text" name="i" value="" size="30"></form>
		<input type="button" name="lc" value="Llamar Image Choser" onClick="abrir()">
	</body>
</HTML>