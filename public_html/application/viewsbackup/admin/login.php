<html>
<head>
	<title>Admin Control Panel Login</title>
	
	<style type="text/css">
		h1 {
			font-family: Verdana;
			font-size: 22pt;
			color: #444444;
			border-bottom-style:solid;
			border-bottom-width: 3px;
			border-bottom-color: #aaaaaa;
			padding: 10px 0 20px 40px;
		}
		#login{
			margin-top: 150px;
			width: 250px;
			margin-left: auto;
			margin-right: auto;	
			color: #444444;
		}
		label {
			width: 95px;	
			padding: 5px;
		}
		input {
			width: 150px;	
		}
		span {
			width: 5px;
			padding: 2px;
		}
		#error{
			width: 400px;
			margin-left: auto;
			margin-right: auto;
			color:red;	
			border-color: #999999;
			border-width: 1px;
			border-style: solid;
			padding: 6px;
			text-align: center;
		}
	</style>
</head>

<body>
<h1>Admin Control Panel Login</h1>
<?php echo form_open('admin'); ?>
	<?php echo $error;?>
	<div id="login">
		<div>
			<label>username</label><span>:</span><input type="text" name="username"/>
		</div>
		<div style="margin-top: 10px;">
			<label>password</label><span>:</span><input type="password" name="password"/>
		</div>
		<div style="margin-top: 10px;float: right;">
			<input type="submit" value="LOGIN" />
		</div>
	</div>
</form>
</body>
</html>