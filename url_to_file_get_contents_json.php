<?php
	$cat=16;
	$url="https://www.test.com/api/data.php?id="."$cat";

	// Get the contents of the JSON file 

	$url_data=file_get_contents($url);

			echo "<pre>";
			print_r($url_data);
			echo "</pre>";
			echo "<hr>";
 
	$returnValue = json_decode($url_data,true);
	echo "<pre>";
	print_r($returnValue);
	echo "</pre>";

?>
