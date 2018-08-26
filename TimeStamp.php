<?php
echo "<h2>Timestamp to Time Ago Like Facebook in PHP</h2>";

$current_date = strtotime("2018-08-26");

$old_date = strtotime("2018-08-01");

$difference = $current_date - $old_date;

echo "Seconds = ".$difference."<br>";
echo "Minutes = ".floor($difference/(60))."<br>";
echo "Hours = ".floor($difference/(60*60))."<br>";
echo "Days = ".floor($difference/(60*60*24))."<br>";
echo "Weeks = ".floor($difference/(60*60*24*7))."<br>";
echo "Months = ".floor($difference/(60*60*24*30))."<br>";
echo "Year = ".floor($difference/(60*60*24*30*12))."<br>";

?>