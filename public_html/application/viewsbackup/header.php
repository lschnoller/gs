<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>css/reset-fonts-grids.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css" type="text/css">


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/menu/anylinkmenu.css" />

<script type="text/javascript" src="<?php echo base_url();?>inc/menu/menucontents.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>inc/menu/anylinkmenu.js"></script>

<script type="text/javascript">
anylinkmenu.init("menuanchorclass")
</script>

</head>

<body class="yui-skin-sam">
   <div id="doc2" class="yui-t3">
   	<div id="hd">
   		<a id="logo-gs" href="<?php echo base_url();?>"></a>
   		<a id="logo-mba" href="<?php echo base_url();?>mba"></a>
   		<div class="clear"></div>
   		<div id="head-left-menu">
   			<ul>
   				<li><a href="<?php echo base_url();?>">INICIO</a></li>
   				<li class="left-border"><a href="<?php echo base_url();?>nuestro_centro">NUESTRO CENTRO</a></li>
   				<li class="left-border"><a href="<?php echo base_url();?>equipo">EQUIPO</a></li>
   				<li class="left-border"><a href="<?php echo base_url();?>contactenos">CONTACTENOS</a></li>
   				<li class="left-border"><a href="<?php echo base_url();?>">INGRESAR</a></li>
   			</ul>
   		</div>
   		<div id="head-right-menu">
   			<ul>
   				<li class="top-menu"><a class="menuanchorclass" rel="anylinkmenu1">MÉTODO</a></li>
   				<li class="top-menu"><a class="menuanchorclass" rel="anylinkmenu2" >SERVICIOS</a></li>
   				<li class="top-menu"><a class="menuanchorclass" rel="anylinkmenu3">ACTIVIDADES</a></li>
   			</ul>
   		</div>
   		<div class="clear"></div>
   		<div id="top-image" class="<?php echo $imageCSS;?>">
   			<?php echo $textOnImage;?>
   			<div class="top-image-bottom"></div>
   		</div>
   		<div id="buscar">
   			<label>BUSCAR</label><input type="text" name="search"/>
   		</div>
   		
    </div>
