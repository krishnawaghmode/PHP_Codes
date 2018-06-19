<?php
// blockip.txt file create and ip addresses add
echo "<pre>blockip.txt
192.43.1.1
192.43.1.2
192.43.1.3
192.43.1.4
192.43.1.5
192.43.1.6
192.43.1.7
127.0.0.1</pre>";
$ip = $_SERVER['REMOTE_ADDR'];

$file = file_get_contents('blockip.txt');

if(strstr($file, $ip)){
    echo "You have been banned!"; 
}else{
	echo "You have not been banned!";
}

echo "<br>";


echo "Your IP Address: "."$ip"."<br>"."All IP Address: "."$file";



