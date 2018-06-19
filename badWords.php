<?php

// bad words sensoring script
function badwords($text){
	$bad = array('love','java','android','php');
	$rep = array('*ove','**va','***roid','*h*');

	for ($i=0; $i < count($bad); $i++) { 
		$text = str_replace($bad[$i], $rep[$i], $text);
	}
    print_r($bad);

    echo "<br>";
	echo $text;
	//you can also use return $text

}

// the text

$text = "I love php.android java javascript html css .net C#";

badwords($text);