<?php
<meta http-equiv="refresh" content="3" />
echo "<h1>Random Images Method 1</h1>";

$var = rand(1,3);

if($var == 1){
	print '<img src="URL image 1" />';
}
if($var == 2){
	print '<img src="URL image 2" />';
}
if($var == 3){
	print '<img src="URL image 3" />';
}


echo "<h1>Random Images Method 2</h1>";

$num = rand(1,3);

switch($num){
	case 3:$image_file="img/1.jpg";
	break;
	case 3:$image_file="img/1.jpg";
	break;
    case 3:$image_file="img/1.jpg";
	break;
}
  echo "<img src=$image_file/>";
echo "<h1>Random Images Method 3</h1>";

$img = array('img/1.jpg','img/1.jpg','img/1.jpg');

$out = rand(1,count($img));

$selected = "$img[$out]";
echo "<img src=$selected />";





