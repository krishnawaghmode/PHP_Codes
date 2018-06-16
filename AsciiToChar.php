<?php

/*        ascii to Char       */

for($i=65;$i<=90;$i++){  // 65 to 90 A to Z  97=a to z=122

	echo $i."----".chr($i)."<br/>";


}
/*        Char To ASCII   */


$str ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
 
 for($i=0;$i<strlen($str);$i++){
 	echo $str[$i]."======".ord($str[$i])."<br/>";
 }

?>