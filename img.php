<?php
$img = imagecreatetruecolor(100, 100);
$red = imagecolorallocate($img, 0xFF, 0x00, 0x00);
//������ʹ��imageline��������
imageline($img, 0, 0, 100, 100, $red);
imagestring($img, 5, 0, 0, "Hello world", $red);
header("content-type: image/png");
imagepng($img);
imagedestroy($img);
?>