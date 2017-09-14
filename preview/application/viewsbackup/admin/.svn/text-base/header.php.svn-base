<html>
<head>
	<title>Admin Control Panel</title>
	<link type="text/css" href="<?php echo base_url();?>css/reset-fonts-grids.css" rel="stylesheet">
	<style type="text/css">
*{
	text-align: left;
}
		h1 {
			font-family: Verdana;
			font-size: 28px;
			color: #444444;
			border-bottom-style:solid;
			border-bottom-width: 3px;
			border-bottom-color: #aaaaaa;
			padding: 10px 0 20px 40px;
		}
		h2 {
			margin:0px;
			font-family: Verdana;
			font-size: 15px;
			color: #777777;
			border-bottom-style:solid;
			border-bottom-width: 2px;
			border-bottom-color: #cccccc;
			padding: 5px 40px 5px 0px;
			text-align: right;
		}
		a{
			font-family: Verdana;
			font-size: 13px;
			color: #777777;
			text-decoration: none;
		}
		a:HOVER{
			color: #333333;
		}
		#main-menu{
		width: 900px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 10px;
		}
		#main-menu a{
		font-family: Verdana;
		font-size: 14px;
		color: #666666;	
		text-decoration: none;
}
	.list{
		font-family: Verdana;
		font-size: 13px;
		color: #222222;
		width: 900px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 5px;
		padding: 2px;
	}
	.dark{
		background-color: #eeeeee;
	}
	.list a{
		font-family: Verdana;
		font-size: 13px;
		color: #222222;
		text-decoration: none;
	}
	.list a:HOVER {
		color: #080808;
	}
	.list li { 
  		list-style: none; 
 		margin: 0px; 
		float: left;
	}
	#right{
		float: right;
	}
	#submit{
		width: 900px;
		margin-left: auto;
		margin-right: auto;
		margin-top: 25px;
		height: 30px;
		text-align: right;
	}
	#submit input{
		padding: 5px;
		width:100px;
		color: #222222;
		font-family: Verdana;
		background-color: #eeeeee;
		font-weight:bold;
		float: right;
		cursor: pointer;
	}
	#error{
			width: 900px;
			margin-top: 5px;
			margin-left: auto;
			margin-right: auto;
			color:red;	
			border-color: #999999;
			border-width: 1px;
			border-style: solid;
			padding: 3px;
		}
	#success{
			width: 900px;
			margin-top: 5px;
			margin-left: auto;
			margin-right: auto;
			color:green;
			font-weight:bold;	
			border-color: #999999;
			border-width: 1px;
			border-style: solid;
			padding: 3px;
		}
	#menu{
		font-family: Verdana;
		font-size: 13px;
		color: #222222;
		margin-right: 20px;
		float: right; 
	}
	#titles{
		font-family: Verdana;
		font-size: 14px;
		color: #999999;
		width: 900px;
		font-weight:bold;
		margin-left: auto;
		margin-right: auto;
		margin-top: 5px;
		height: 20px;
		padding: 2px;	
	}
	#titles li { 
  		list-style: none; 
 		margin: 0px; 
		float: left;
	}
	#head-menu{
		font-family: Verdana;
		
		color: #444444;
		border-bottom-style:solid;
		border-bottom-width: 2px;
		border-bottom-color: #aaaaaa;
		padding: 5px;
		text-align: center;
	}
	#head-menu li{
		float: left;
		padding: 0 10px;
		list-style: none;	
			
	}
	#head-menu a{
		font-size: 11px;
	}
	#head-menu a:HOVER{
		color: #000;	
		font-size: 12px;
	}
	
	.buttons {
		background-position:center;
		background-repeat:no-repeat;
		display: block;
		width: 17px;
		height: 17px;
	}
	.edit {
		background-image:url('<?php echo base_url()?>design/btn_editB.png');
	}
	.edit:hover{
		background-image:url('<?php echo base_url()?>design/btn_edit.png');
	}
	
	.delete {
		background-image:url('<?php echo base_url()?>design/btn_deleteB.png');
	}
	.delete:hover{
		background-image:url('<?php echo base_url()?>design/btn_delete.png');
	}
	
	</style>
	
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.8.0r4/build/editor/assets/skins/sam/simpleeditor.css" />
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/yahoo-dom-event/yahoo-dom-event.js"></script>

<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/element/element-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/container/container_core-min.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.8.0r4/build/editor/simpleeditor-min.js"></script>


</head>

<body>
<h1>Admin Control Panel 
	<span style="font-size: 13pt;">-> <?php echo $section;?></span>
	<a href="<?php echo base_url();?>admin" id="menu">Menu</a>
</h1>
<div id="head-menu">
	<div style="height: 15px;">
		<ul>
			<li><a href="<?php echo base_url();?>admin/calendario">Calendario</a></li>
			<li><a href="<?php echo base_url();?>admin/quickLinks">QuickLinks</a></li>
			<li><a href="<?php echo base_url();?>admin/references">References</a></li>
			<li><a href="<?php echo base_url();?>admin/Talleres">Talleres</a></li>
			<li><a href="<?php echo base_url();?>admin/seminarioscat">SeminariosCat</a></li>
			<li><a href="<?php echo base_url();?>admin/seminarios">Seminarios</a></li>
			<li><a href="<?php echo base_url();?>admin/addresses">Addresses</a></li>
			<li><a href="<?php echo base_url();?>admin/users">Users</a></li>
			
		</ul>
	</div>
</div>