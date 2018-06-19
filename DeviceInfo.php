<?php
echo "<h2>Devive Name</h2>";


echo gethostname();
echo "<br>";
echo php_uname('n');
echo "<br>";

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo $hostname;

echo "<h2>PHP- How to get the ip address of the website</h2>";
echo gethostbyname("gaana.com");





