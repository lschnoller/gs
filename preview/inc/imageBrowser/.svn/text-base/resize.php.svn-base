<?php
function makeimage($corigen,$filename,$newfilename,$path,$newwidth,$newheight,$calidad) {

	$image_type = strstr($filename, '.');

		switch($image_type) {
			case '.jpg':
				$source = imagecreatefromjpeg($corigen . $filename);
				break;
			case '.png':
				$source = imagecreatefrompng($corigen . $filename);
				break;
			case '.gif':
				$source = imagecreatefromgif($corigen . $filename);
				break;
			default:
				echo("Error: Tipo de Imagen Invalido");
				die;
				break;
			}
	
	$file = $newfilename . $filename;
	
	$fullpath = $path . $file;

	list($width, $height) = getimagesize($corigen . $filename);

	$thumb = imagecreatetruecolor($newwidth, $newheight);

	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	imagejpeg($thumb, $fullpath, $calidad);

	$filepath = $fullpath;
	
	return $filepath;
}
?> 
