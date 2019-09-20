<?php
if(isset($_POST['post_image']))
{
	$image_url=$_POST['image_path'];
	$data = file_get_contents($image_url);
	$new = 'myimage.jpg';
	$upload =file_put_contents($new, $data);
	if($upload) {
		echo "<img src='myimage.jpg'>";
	}else{
		echo "Please upload only image files";
	}
}
?>
<html>
<head>
    
</head>
<body>

 <form method="post" action="index.php">
  
    <input type="text" name="image_path" placeholder="Enter Image URL">

    <input type="submit" name="post_image" value="Submit">
 
 </form>

</body>
</html>
