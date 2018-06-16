<?php
/*   uniquid function  and file Create.txt */

$file =uniqid("text_",true).".txt";
$content="KRishna";
file_put_contents($file, $content);
?>