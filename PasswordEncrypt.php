<?php
// PHP Password Encrypt and Decrypt Process

// PHP Password Encrypt


echo "<h1>1.  one way encryption</h1>";

// md5()
//  

$name = "Krishna";

echo md5($name);

// -- ---------------

echo "<h1>2. two way decryption</h1>";

// base64_encode()
// base64_decode() 
$str = "Testing";
echo $enc= base64_encode($str);
echo "<br>";


echo base64_decode($enc);