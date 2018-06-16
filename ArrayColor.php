<?php

/*  -----------------  Array Color Each Word  ----------- */
echo "<h1>Array Color Each Word In PHP</h1>";

$ar =array("RED","GREEN","BLUE","BLACK","orange","silver","grey");
$str = "Krishna";

for($i=0;$i<strlen($str);$i++){

 echo "<font color='".$ar[$i]."'><b>".$str[$i]."</b></font>";

}
/*  -----------------  Array Color Each Word  ----------- */

?>