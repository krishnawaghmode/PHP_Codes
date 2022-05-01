<?php 
       
      // replace the mobile number with stars except last 4 digits in php   

      $mobile_no = 9850401144;
      echo preg_replace('~[+\d-](?=[\d-]{4})~', '*', $mobile_no);

      //  ******1144
?>
