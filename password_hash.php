<?php

/*       password_hash AND password_verify  */

$original = "Krishna";

$ex = password_hash($original,PASSWORD_DEFAULT);

echo "<h1>" .$ex. "</h1>";
if (password_verify($original,$ex)) {
	echo "<br/>Password Match";
}else{
	echo "Password Not Match";
}


?>