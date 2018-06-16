
<?php
/* --------------Image Download -------------*/
 $url ='https://developer.android.com/static/images/home/jetpack-promo.svg';

var_dump(pathinfo($url,PATHINFO_BASENAME));
var_dump(pathinfo($url,PATHINFO_FILENAME));
var_dump(pathinfo($url,PATHINFO_EXTENSION));
var_dump(pathinfo($url,PATHINFO_DIRNAME));

$file =file_get_contents($url);
$filename =pathinfo($url,PATHINFO_BASENAME);
echo "<img src='$url' width='250px' height='250px'  />";

file_put_contents($filename, $file);

var_dump('Image is downloaded to this server.........thanks.......');
/* --------------Image Download -------------*/