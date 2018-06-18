<?php
echo "<h1>Number Format in PHP</h1>";

$num = 1215445;


$format = number_format($num);


echo "Views: $format"."<br>";

echo "<h1>Two Number Format in PHP</h1>";

$x= 6000;

echo "Total Price: ".number_format($x,2);