<?php
echo "<pre>sha1 function</pre>";
$str = "PHP";
$sha1= sha1($str);
$md5= sha1($str);

echo $str."<br>";

echo strlen($sha1)."<br>";
echo $sha1."<br>";

if(sha1($str)==$sha1){
	
echo "Match String";
}else{
	
	echo "not Matched";
}
echo "<pre>md5 function</pre>";
echo "<br>";

if($str==$md5){
	
echo "ok";
}else{
	
	echo "no";
}
