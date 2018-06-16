
<?php
/* --------------URL Information GET In PHP -------------*/
echo "<h1>URL Information Get</h1>";
 $url ='https://developer.android.com/static/images/home/jetpack-promo.svg';

echo pathinfo($url,PATHINFO_BASENAME)."<br>";
echo pathinfo($url,PATHINFO_FILENAME)."<br>";
echo pathinfo($url,PATHINFO_EXTENSION)."<br>";
echo pathinfo($url,PATHINFO_DIRNAME)."<br>";

// echo $file =file_get_contents($url)."<br>";
 $file =file_get_contents($url)."<br>";

echo "<img src='$url' width='250px' height='250px'  />";
// echo $filename =pathinfo($url,PATHINFO_BASENAME);

// file_put_contents($filename, $file);

// var_dump('Image is downloaded to this server.........thanks.......');
/* --------------URL Information Get -------------*/