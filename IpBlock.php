<?php

// require("header.php");
$ip_address=$_SERVER['REMOTE_ADDR'];

$ip_bloked=array('127.0.0.1','192.168.43.34');


foreach($ip_bloked as $ip){
	// echo $ip."<br>";
	
	if($ip==$ip_address){
	die('Your ip address'.$ip_address.'has blocked');
	}
}
