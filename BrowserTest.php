<?php
function detect()
{
	$info=$_SERVER['HTTP_USER_AGENT'];
	
	if(strpos($info,"Chrome")==true)
		echo "This is Google Chrome Browser";
	else if(strpos($info,"Firefox")==true)
		echo "This is firefox Browser";
	else if(strpos($info,"IE")==true)
		echo "This is Internet Explore Browser";
	else 
		echo "Any Other Browser";
}

detect();

?>