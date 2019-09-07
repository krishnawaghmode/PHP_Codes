<?php include("../db/db.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Update PHP mysql</title>
</head>
<body>
<h1>Image Update PHP mysql</h1>
  <?php 
//Database connection must or file include
    $sql = "SELECT * from img_test"; 
				           $result = mysqli_query($conn, $sql);  
				         if(mysqli_num_rows($result)>0){


				         	while($row = mysqli_fetch_assoc($result))  
				           {  
				           	
				           		
				           	   $img_id=$row['img_id'];
				           	   $img_name=$row['img_name'];
				           
				         }}else{echo "No data?";}

//Image Update Code
		 if(isset($_POST['image_edit']))
		 {
			echo "Id  ".$img_id=$_POST['img_id'];
			echo "<br>img_url  ".$img_url=$_POST['imageurl'];
			$img_u_name=$_FILES['image']['name'];
			$img_error=$_FILES['image']['error'];
			$img_file=$_FILES['image']['tmp_name'];
	

if($img_error=="4"){

	echo "Without Image Upload!!";
}else{

    //old image name
	$old_img=$img_url;
	//path Image folder or Directory
	$path="status_img/img_test/";

	$old_img_path=$path.$old_img;
	//new image name
	$img_name=$img_u_name;

 $query="UPDATE img_test SET img_name='$img_name' WHERE img_id='$img_id'";

if($sql=mysqli_query($conn,$query)){
	if (is_file($old_img_path)) {
		
		if(unlink($old_img_path)){
			move_uploaded_file($img_file,$path.$img_name);
			echo "<br><b>Delete_image to New Image Upload</b>";
		}else{
			echo "image_not_delete?";
		} 
	}else{
		echo "image_not_exists?";
	}
}else{
	echo "query not execute???".mysqli_error($conn);
}
}
}
?>
<form method="POST" enctype="multipart/form-data" action="Image_Update.php">

    <table>
    	<tr>
			    <th>Imgage Id:</th>
			    <td><?php if(isset($img_id)){echo $img_id;}?></td>
       </tr>
  
    <tr>
      <tr>
        <th>Image Preview:</th>
        <td>
        
         <input type="file" name="image" onchange="loadFile(event)">
         <img id="output" width="145px"   height="150px" src="<?php if(isset($img_name)){ echo 'status_img/img_test/'.$img_name;}?>" />
       
       </td>
     </tr>
     <th></th>
      <td>
                
              <input type="submit" name="image_edit" value="Update Image" />
           
      </td>
    </tr>
  </table>
<input type="hidden" name="imageurl"  value="<?php if(isset($img_name)){ echo $img_name;}?>" />
<input type="hidden" name="id"  value="<?php if(isset($img_id)){echo $img_id;}?>" />
<input type="hidden" name="img_id"  value="<?php if(isset($img_id)){echo $img_id;}?>"/>
</form>
<!-- <br /> -->
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
</body>
</html>
