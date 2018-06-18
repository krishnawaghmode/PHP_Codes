<?php

// Regular Expression 
//^ starting, a aaa matched
//$  Ending,   aaaaaa no match only a matched
//. only Single Character
//* Zero or More Character
//+ One or More Character


extract($_POST);
if(isset($submit)){

	$pattern ="/^[a]+$/";
	if(preg_match($pattern, $name)){
		echo "string Matched";
	}else{
		echo "No Match";
	}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Regular Expression</title>
</head>
<body>
	<h1>Regular Expression</h1>
<pre>
// Regular Expression 
//^ starting, a aaa matched
//$  Ending,   aaaaaa no match only a matched
//. only Single Character
//* Zero or More Character
//+ One or More Character

****** Only Alphabetically allowed ********
$pattern ="/^[a-z]+$/";

-------Mobile Number Validation---------
$pattern ="/^\d{10}+$/";

*******Email Validation*******
krish__14@gmail.com

$pattern ="/^[a-z]+[-]*[0-9]*(@).[a-z]+(.com)$/";

++++++++Only Numbers allowed+++++++++

$pattern="/^[0-9]+$/";
</pre>
<form action="" method="POST">
	<input type="text" name="name"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>