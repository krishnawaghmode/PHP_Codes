<?php

echo "<h2>htmlspecialchars</h2>";
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);

echo "<br>";
echo $str;
echo "<br>";

echo "<h2>htmlentities</h2>";


$str1 = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str1);
echo "<br>";
echo $str1;

?>