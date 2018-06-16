<?php
/*  Image Download name Assign  */
$url ="https://developer.android.com/static/images/home/jetpack-promo.svg";
$img ='new.svg';

$file = file_put_contents($img,file_get_contents($url));

if($file){
	echo "Download Image";

}else{
	echo "Download Error";
}

