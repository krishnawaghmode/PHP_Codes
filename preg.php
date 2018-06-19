<?php
echo "<h3>preg_match function</h3>";
$string ="Check Sublime Text Editor";
if(preg_match("/sublime/",$string)){
	
	echo "The String $string contains the word Sublime";
}else{
	echo "The String $string does not contains the word Sublime";
}

echo "<h3>preg_replace(pattern, replacement, subject) function</h3>";
$string1="This is Sublime Text Editor";

$string2=preg_replace("/Sublime/", '<h2>sublime</h2>', $string1);
echo  $string1;
echo "<br>";
echo $string2;

echo "<h3>preg_split(pattern, subject) function</h3>";

$string3="Check Sublime Text Editor";
$string_array=preg_split("/ /", $string3);
print_r($string_array);


