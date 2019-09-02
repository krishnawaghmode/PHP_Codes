<?php
//must be Database Connection this file
     include("db/db.php");

$json="डर 😯 मुझे भी लगा फांसला 🛣️ देख कर, पर मैं बढ़ता 🚶 गया रास्ता देख कर, खुद ब खुद मेरे नज़दीक आती गई मेरी मंज़िल 🗻 मेरा हौंसला देख कर। 😀";

 $query="INSERT INTO `hindi`(`status`) VALUES ('$json')";

                    $sql=mysqli_query($conn,$query);
                    if($sql){
                           echo "Success </br> $query";
                   
                    }else{
                      echo "Error<br>".mysqli_error($conn);
                    }
                           $sql = "SELECT * FROM `hindi` limit 2";  
                           $result = mysqli_query($conn, $sql);  
                           $json_array = array();  
                           while($row = mysqli_fetch_assoc($result))  
                           {  
                                $json_array[] = $row;  
                           }  


			echo "<h1>Json_Array</h1>";    
            echo '<pre>'; 
			print_r($json_array); 
			echo '</pre>'; 

					echo "<h1>Json_encode</h1>";
					echo '<pre>';  
					//Array to json format
					// print_r($json_array);  
					// print_r(json_encode($json_array));  
					echo $encode=json_encode($json_array);  
					echo '</pre>'; 
			

			echo "<h1>Json_decode </h1>";
			$decode=json_decode($encode);  
			echo '<pre>'; 
			print_r($decode); 
			echo '</pre>'; 

?>
