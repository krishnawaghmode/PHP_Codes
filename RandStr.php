<?php
echo "<h1>*******************first Method str_shuffle & substr*********</h1>";

function randStr($length)
  {
      $allchar="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      $allchar = str_shuffle($allchar);
      $rs= substr($allchar,0,$length);
      
      
      return $rs;

  }


echo "<b>String Length: </b>".strlen(randStr(10))."<br>";
echo "<b>Sting Rand Id: </b>".randStr(10);
echo "<h1>*******************Second Method str_split & array_rand*********</h1>";

function randStr2($length)
  {
      $allchar="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
   $charArray=str_split($allchar);
   $result="";
   for($i=0;$i<$length;$i++){
       $randindex = array_rand($charArray);
       $result = $result.$charArray[$randindex];
   }
      return $result;

  }
echo "<b>String Length: </b>".strlen(randStr2(100))."<br>";

echo randStr2(100);

echo "<h1>*******************Third Method substr & str_shuffle*************</h1>";

$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
$gen =substr(str_shuffle($char),0,6);
echo "<h2>$gen</h2>";
?>