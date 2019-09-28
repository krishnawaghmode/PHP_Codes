<?php
// $cat=array(11,13,14,16,17,18,19,20,21,22,23,24,26);
$cat=array(11);

foreach ($cat as $key => $cid) {
     for($page=1;$page<=1;$page++){
             //json link here paste
					echo $url="http://mysite.com/api/v1/cat_data.php?cat_id=$cat[$key]&page_id="."$page";
					echo "<br>";

	$url_data=file_get_contents($url);

	$json_array = (json_decode($url_data,true));
	// echo "<pre>";
	// print_r($json_array);
	$count=count($json_array['result']);
	 // $data_get=array();


     for($status_id=0; $status_id<$count;$status_id++) { 
	
			echo "s_id :".$json_array['result'][$status_id]['s_id']."<br>";
			echo "s_cid :".$json_array['result'][$status_id]['s_cid']."<br>";
			echo "s_date :".$json_array['result'][$status_id]['s_date']."<br>";
			echo "s_hen :".$json_array['result'][$status_id]['s_hen']."<br>"; 
			echo "s_hindi :".$json_array['result'][$status_id]['s_hindi']."<br>";
			echo "s_like :".$json_array['result'][$status_id]['s_like']."<br>"; 
			echo "s_share :".$json_array['result'][$status_id]['s_share']."<br>";
			echo "<hr>";

       }
   }
}
?>
