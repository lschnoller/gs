<html>
	<head>
		<title>Image Browser</title>
		<style type="text/css">
			td{font-size:10px;font-family:verdana;color:#333333;}
			a{text-decoration:none}
			a:hover{text-decoration:underline}
			.espacio{font-size:3px;height:10px;}
	  </style>
	  <script language="javascript">
	  	m1 = "";
	  	m2 = "";
	  	function marcar(accion,img,dir){
	  		if(accion == "sobre"){
	  			if(m1 != dir){
	  			  document.getElementById(img).src = "folder-over.gif";
	  			  document.getElementById(dir).style.fontWeight = "bold";
	  		  }
	  		}
	  		else{
	  			if(accion == "click"){
	  				if(m1 != ""){
	  				  document.getElementById(m2).src = "folder.gif";
	  			    document.getElementById(m1).style.fontWeight = "";
	  			  }
	  			  
	  			  document.getElementById(img).src = "folder-gold.gif";
	  			  document.getElementById(dir).style.fontWeight = "bold";
            m1 = dir;
            m2 = img;
	  		  }
	  		  else{
	  		  	if(m1 != dir){
	  			    document.getElementById(img).src = "folder.gif";
	  			    document.getElementById(dir).style.fontWeight = "";
	  			  }
	  			}
	  		}
	  	}
	  </script>
	</head>
  <body bgcolor="#E5E5E5" topmargin=0 leftmargin=10 rightmargin=0 scroll=yes>
  	<table width="100%" border=0 cellspacing=0 cellpadding=0>
  		<tr><td colspan=2 class=espacio>&nbsp</td></tr>
  		<?
  		  $pathbase = "/Library/WebServer/Documents/gs/images/quickLinks/";
  		  $path = $pathbase;
  		  
        $dir = opendir($path);
        $i=0;
        while ($elemento = readdir($dir)){ 
        	$i++;
        	include 'sizer.inc.php';
                    
          $nc = count($carpeta);

          $mr = "";
          
          if($pathbase = $path){
        		$extra = $elemento != ".." ;
        	}
        	else{
        		$extra = true;
        	}
          
          for($j=0;$j < $nc;$j++){
            if($elemento == $carpeta[$j]){
              if($elemento != "." and $extra && $titulo[$j] == 'Large'){
                echo "<tr onclick=\"window.parent.llamar_c('archivos.php?path=".$elemento."','archivos','" . $elemento . "');marcar('click','c".$i."','e".$i."')\" style=\"cursor:pointer\" onmouseout=\"marcar('fuera','c".$i."','e".$i."')\" onmouseover=\"marcar('sobre','c".$i."','e".$i."')\"><td width=42><img src=\"folder.gif\" border=\"0\" id=\"c".$i."\"></td><td id=\"e".$i."\">" . $titulo[$j] . "</td></tr>\n";
                echo "<tr><td colspan=2 class=espacio>&nbsp</td></tr>\n";
              }
            }
          }
        }
        closedir($dir); 
      ?>
  	</table>
  </body>
</html>