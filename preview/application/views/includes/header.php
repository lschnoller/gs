<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	<head>	
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<title>GS Admin</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url();?>css/style-admin.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url();?>css/layout-admin.css" type="text/css" media="screen" />
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
			
		<link rel="stylesheet" href="<?php echo base_url();?>css/blue.css" type="text/css" media="screen" />
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="<?php echo base_url();?>css/red.css" type="text/css" media="screen" />  
	 <link rel="stylesheet" href="<?php echo base_url();?>css/invalid.css" type="text/css" media="screen" />
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="<?php echo base_url();?>css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo base_url();?>js/facebox.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo base_url();?>js/simpla.jquery.configuration.js"></script>
		
		
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo base_url();?>js/jquery.wysiwyg.js"></script>
		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="<?php echo base_url();?>js/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">GS Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="<?php echo base_url();?>design/logo.png" alt="Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<a href="<?=base_url()?>" target="_blank" title="View the Site">View the Site</a> | <a href="<?php echo base_url();?>login/logout" title="Sign Out">Sign Out</a>
			</div>        
			<?php
			if(!isset($current))
				$current = '';
			?>
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				
				<!-- <li> 
					<a href="<?=base_url()?>admin_addresses" class="nav-top-item no-submenu <?=($current == 'addresses') ? 'current' : '';?>">
					Addresses
					</a>
				</li> -->
				<li> 
					<a href="<?=base_url()?>admin_calendario" class="nav-top-item no-submenu <?=($current == 'calendario') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					Calendario
					</a>
				</li>
				<li> 
					<a  href="<?=base_url()?>admin_cursos" class="nav-top-item no-submenu <?=($current == 'cursos' || $current == 'cursos_cats') ? 'current' : '';?>"> 
					Cursos
					</a>
					<!-- <ul>
						<li><a class="<?=($current == 'cursos_cats') ? 'current' : '';?>" href="<?=base_url()?>admin_cursos_cats">Cursos Cats</a></li>
						<li><a class="<?=($current == 'cursos') ? 'current' : '';?>" href="<?=base_url()?>admin_cursos">Cursos</a></li>
					</ul> -->
				</li>
				
				<li> 
					<a href="<?=base_url()?>admin_newsletter" class="nav-top-item no-submenu <?=($current == 'newsletter') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					NewsLetter
					</a>
				</li>
				<li> 
					<a href="<?=base_url()?>admin_quicklinks" class="nav-top-item no-submenu <?=($current == 'quicklinks') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					QuickLinks
					</a>
				</li>
				<li> 
					<a href="<?=base_url()?>admin_referencias" class="nav-top-item no-submenu <?=($current == 'referencias') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					Referencias
					</a>
				</li>
				<li> 
					<a  href="<?=base_url()?>admin_seminarios" class="nav-top-item no-submenu <?=($current == 'seminarios' || $current == 'seminarios_cats') ? 'current' : '';?>"> 
					Seminarios
					</a>
					<!-- <ul>
						<li><a class="<?=($current == 'seminarios_cats') ? 'current' : '';?>" href="<?=base_url()?>admin_seminarios_cats">Seminarios Cats</a></li>
						<li><a class="<?=($current == 'seminarios') ? 'current' : '';?>" href="<?=base_url()?>admin_seminarios">Seminarios</a></li>
					</ul> -->
				</li>
				<li> 
					<a href="<?=base_url()?>admin_talleres" class="nav-top-item no-submenu <?=($current == 'talleres') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					Talleres
					</a>
				</li>
				<li> 
					<a href="<?=base_url()?>admin_testimonios" class="nav-top-item no-submenu <?=($current == 'testimonios') ? 'current' : '';?>"> <!-- Add the class "current" to current menu item -->
					Testimonios
					</a>
				</li> 
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->