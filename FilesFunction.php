<?php
echo "<pre>basename() function returns the filename from a path.</pre>";

$path = "/testweb/home.php";

//Show filename with file extension
echo basename($path) ."<br/>";

//Show filename without file extension
echo basename($path,".php");
echo "<pre>dirname() function returns the directory name from a path.</pre>";
echo dirname("c:/testweb/home.php") . "<br />";
echo dirname("/testweb/home.php");

// echo "<pre>The unlink() function deletes a file.</pre>";
// $file = "1.txt";
// if (!unlink($file))
//   {
//   echo ("Error deleting $file");
//   }
// else
//   {
//   echo ("Deleted $file");
//   }
// echo "<pre>The rmdir() function removes an empty directory.</pre>";

//   $path = "images";
// if(!rmdir($path))
//   {
//   echo ("Could not remove $path");
//   }

  
?>