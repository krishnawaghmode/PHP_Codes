<?php 

// Websites get image href scrapping run on browser console

// var names=document.getElementsByClassName("class-image");
// for(i=0;i<names.length;i++)
// {
//     console.log(names[i].href);
    
// }


$link="https://images.unsplash.com/photo-1568823993941-af3e264aea97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60
https://images.unsplash.com/photo-1568823993941-af3e264aea97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60
https://images.unsplash.com/photo-1568860484650-036939ceddc6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60
https://images.unsplash.com/photo-1568758983452-5192c47d2b54?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60
https://images.unsplash.com/photo-1568805746651-dfa8adb22036?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
;

echo "<h2>Image_links add Array</h2>";
// array links show lists

// echo "<pre>";
// print_r (explode("\n",$link));
// echo "</pre>";


$url=explode("\n",$link);

for($i=0;$i<count($url);$i++) {
	echo $url[$i]."<br>";
	$file =file_get_contents($url[$i]);
    $filename =pathinfo($url[$i],PATHINFO_BASENAME);
    
    file_put_contents($filename, $file);
}
?>
