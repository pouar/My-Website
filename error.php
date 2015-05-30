<?php
putenv('GDFONTPATH=' . realpath('.'));
header("Content-Type: image/png");
$img = imagecreate(1280, 800);
$bgcolor = imagecolorallocate($img, 0, 0, 170);
$hicolor = imagecolorallocate($img, 170, 170, 170);
$textcolor = imagecolorallocate($img, 255, 255, 255);
imagefill($img, 0, 0,$bgcolor);
imagefilledrectangle($img,524,187,716,211,$hicolor);
imagefttext($img, 24, 0, 0, 0, $bgcolor, '/srv/http/Perfect DOS VGA 437.ttf', "\n\n\n\n\n\n                              Error {$_GET['error']}");
imagecopy($img, imagecreatefrompng("fixit_logo.png"), 800, 450, 0, 0, 352, 184);
imagefttext($img, 24, 0, 0, 0, $textcolor, '/srv/http/Perfect DOS VGA 437.ttf', "\n\n\n\n\n\n\n\n    This website decided to pull a Windows\n    Please do one of the following
\n    Click \"Send Error Report\"\n    This will send an error report to /dev/null\n\n    Ask this guy to fix it ---------------->\n    He's got a wrench so he's certified");
imagecopy($img, imagecreatefrompng("fixit_logo.png"), 800, 450, 0, 0, 352, 184);
imagepng($img,NULL,9,PNG_ALL_FILTERS);
