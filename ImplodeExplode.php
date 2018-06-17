<?php

echo "<h1>Implode function (Array to String)</h1>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);


echo "<h1>Explode function(String to Array)</h1>";

$url = "https://www.youtube.com/watch?v=U9dPXPucDFY";
 $fetch=explode("v=", $url);
 echo $videoid=$fetch[0]."<br>";
 $videoid=$fetch[1];
 echo '<img src="http://img.youtube.com/vi/'.$videoid.'/0.jpg" width="250"/>';

?>