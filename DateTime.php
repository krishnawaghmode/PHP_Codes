<?php
echo "<h1>Date and Time in PHP</h1>";
echo "<pre>
d--------for current Date(10)
D--------for Day 3 Digit shows(Thu,sun)
l--------for Full Day(Sunday)
m--------use for month in numeric(03)
M--------use for Month in alpha Characters(Mar)
y--------use for Half year(18)
Y--------use for Full Year(2018)
H--------use for Hour()
i--------use for minutes()
s--------use for secondes
a--------use for (am or pm) in small letter
A--------use for (AM or PM) in Capital letter
G--------use for 09 This like not show,This like show 9
</pre>";

echo "<b>d/m/y :</b>".date("d/m/y")."<br>";
echo "<b>D/M/Y :</b>".date("D/M/Y")."<br>";
echo "<b>l-F-y :</b>".date("l-F-y")."<br>";
echo "<b>d/m/y h:i:s a :</b>".date("d/m/y h:i:s a")."<br>";
echo "<b>d/m/y h:i:s a :</b>".date("d/m/y h:i:s a")."<br>";
echo "<b>d/m/y G:i:s A :</b>".date("d/m/y G:i:s A")."<br>";
