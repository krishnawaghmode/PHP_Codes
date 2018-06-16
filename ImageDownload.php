
<?php
/* --------------Image Download -------------*/
 $url ='http://www.sublimetext.com/images/win_right_bar.png';

var_dump(pathinfo($url,PATHINFO_BASENAME));
var_dump(pathinfo($url,PATHINFO_FILENAME));
var_dump(pathinfo($url,PATHINFO_EXTENSION));
var_dump(pathinfo($url,PATHINFO_DIRNAME));

$file =file_get_contents($url);
$filename =pathinfo($url,PATHINFO_BASENAME);

file_put_contents($filename, $file);

var_dump('Image is downloaded to this server.........thanks.......');
/* --------------Image Download -------------*/