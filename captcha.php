<?php

//session_start();
$str_rand =md5(rand());
$str = substr($str_rand,0,6);
echo "$str";
//$_SESSION['captcha'] =$str;
//$newImage = imagecreate(100, 30);
//imagecolorallocate($newImage, 220, 220, 255);
//$col = imagecolorallocate($newImage,29,10,2,$str,$col);
//header('content:image/jpeg');
//imagejpeg($newImage);
?>
