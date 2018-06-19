<?php 

echo "<pre>/php/demo_global_server.php
www.w3schools.com
www.w3schools.com
https://www.w3schools.com/php/showphp.asp?filename=demo_global_server
Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
/php/demo_global_server.php</pre>";
echo $_SERVER['PHP_SELF'];// /php/demo_global_server.php Returns the filename of the currently executing script
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];  // /php/demo_global_server.php
echo "<br>";
echo $_SERVER['SERVER_NAME'];// www.google.com
echo "<br>";
echo $_SERVER['HTTP_HOST']; // www.google.com
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];//https://www.w3schools.com/php/showphp.asp?filename=demo_global_server
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
echo "<br>";

echo "port on the SERVER_PORT: ".$_SERVER['SERVER_PORT'];
echo "<br>";
echo "pathname of the currently executing script: ".$_SERVER['SCRIPT_FILENAME'];
echo "<br>";
echo "REMOTE_PORT: ".$_SERVER['REMOTE_PORT'];
