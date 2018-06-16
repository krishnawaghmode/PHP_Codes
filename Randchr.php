<?php
echo "Unique Id Generate";

$no1 =rand(65,90);
$no2 =rand(65,90);
$no3 =rand(97,122);
$no4 =rand(97,122);
$no5 =rand(11,99);
$no6 =rand(22,99);

$c1 =chr($no1);
$c2 =chr($no2);
$c3 =chr($no3);
$c4 =chr($no4);

$final_number =$c2.$no5.$c1.$c3.$no6.$c4;

if(isset($final_number)){
   echo "<h1>".$final_number."</h1>";
}
echo "<h1>*********Method 2********</h1>";

   $a= rand(10,20);
   $b= rand(30,50);

echo "Number Generate: $a"."$b";


?>