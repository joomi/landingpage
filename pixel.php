<?php
$x = 1;
$y = 1;
$gd = imagecreatetruecolor($x, $y);
$white = imagecolorallocate($gd, 255, 255, 255);  
header('Content-Type: image/png');
imagepng($gd);

