<?php
	session_start();

	$charset = 'ABCDEFGHJKLMNPQRSTUVWXY';
	$maxpos = strlen($charset) - 1;
	$captcha = '';
	$im = imagecreate(200, 50);
	$white = imagecolorallocate($im, 0xff, 0xff, 0xff);
	for ($i = 0; $i < 6; $i++) {
		$imchar = imagecreate(20, 24);
		$white = imagecolorallocate($imchar,mt_rand(0xe0, 0xff), mt_rand(0xe0, 0xff), mt_rand(0xe0, 0xff));
		$color = imagecolorallocate($imchar, mt_rand(0x00, 0x70), mt_rand(0x00, 0x70), mt_rand(0x00, 0x70));
		$captcha .= substr($charset, mt_rand(0, $maxpos), 1);
		imagestring($imchar, 6, 2, 2, $captcha[$i], $color);
		$imchar = imagerotate($imchar, mt_rand(-10, 10), $white);
		imagecopymerge($im, $imchar, mt_rand(1, 5) + $i *20, mt_rand(0, 8), 0, 0, 20, 24, 100);
	}
	for ($i = 0; $i < 5; $i++) {
		$x1 = mt_rand(0, 59);
		$y1 = mt_rand(0, 23);
		$x2 = $x1+ mt_rand(-2, 2);
		$y2 = $y1+ mt_rand(-1, 1);
		imageline($im, $x1+2, $y1+2, $x2, $y2, mt_rand(0x000000, 0xffffff));
	}
	$_SESSION['captcha'] = $captcha;
	
	header('Content-type: image/png');
	imagepng($im);
	
?>
