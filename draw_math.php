<?
session_start();
getcode(100,25);

function getcode($w,$h){
	$img=imagecreate($w,$h);
	$red=imagecolorallocate($img,255,0,0);
	$white=imagecolorallocate($img,255,255,255);
	$gray = imagecolorallocate($img, 100, 100, 100);
	$background=imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
	
//session start with rand num
	$num1=rand(0,20);
	$num2=rand(0,20);
	$_SESSION['check'] = $num1 + $num2;

//draw background
	imagefilledrectangle($img, 0, 0, 100, 25, $background);

//draw gray
	for($n=0;$n<50;$n++){
		imagesetpixel($img, rand(0,$w), rand(0,$h),$gray);
	}

//draw string
	imagestring($img, 5, 5, 4, $num1, $red);
	imagestring($img, 5, 30, 3, "+", $red);
	imagestring($img, 5, 45, 4, $num2, $red);
	imagestring($img, 5, 70, 3, "=", $red);
	imagestring($img, 5, 85, 2, "?", $white);
//header & destory
	header("Content-type: image/png");
	imagepng($img);
	imagedestory($img);
}
?>
