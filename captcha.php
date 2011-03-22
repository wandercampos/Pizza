<?php

session_start();

$width = 120;
$height = 40;
$length = 5;
$baseList = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ';
$code = "";
$counter = 0;

$image = @imagecreate($width, $height)
or die('Cannot initialize captcha!');

for ($i=0; $i<10; $i++){
	imageline($image,mt_rand(0,$width), mt_rand(0,$height),
		mt_rand(0,$width), mt_rand(0,$height),
		imagecolorallocate($image,mt_rand(150,255),
		mt_rand(150,255),
		mt_rand(150,255)));
}


for ($i=0,$x=0;$i<$length;$i++){
	$actChar = substr($baseList,rand(0,strlen($baseList)-1),1);
	$x += 10 + mt_rand(0,10);
	//imagechar($image,mt_rand(12,),$x,mt_rand(5,20), $actChar,imagecolorallocate($image,mt_rand(0,155), mt_rand(0,155), mt_rand(0,155)));
	imagettftext($image,mt_rand(12,16),0,$x,mt_rand(5,20),imagecolorallocate($image,mt_rand(0,155), mt_rand(0,155), mt_rand(0,155)), 'fonts/' . 		 		 		rand(1,4) . '.ttf',$actChar);
	$code .= strtolower($actChar);
}



header('Content-Type: Image/jpeg');
imagejpeg($image);
imagedestroy($image);

$_SESSION['securityCode'] = $code;
