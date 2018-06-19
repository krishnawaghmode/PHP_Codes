<?php


echo "<h1>uniqid() function</h1>";

echo uniqid();
echo "<br>";
echo uniqid('id');
echo "<br>";
echo uniqid('id',true);
echo "<br>";

echo "<h1>Random Number functions</h1>";
echo md5(time().mt_rand(1,1000));
echo "<br>";
echo "mt_rand: ".mt_rand(0,1000);
echo "<br>";
echo "rand: ".rand(0,10);

