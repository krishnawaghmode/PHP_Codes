<?php


/* Secure Password Create*/
$ex = "8e3ee9d5d3c305f9525b9cb6d284c5236c15c503";
$ok = sha1($ex);
echo $ok;

// salt value
$salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$pass = $_POST['pass'].$salt;
$pass=sha1($Password);
// salt value
/* Secure Password Create*/