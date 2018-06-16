<!DOCTYPE html>
<html>
<head>
	<title>Unique ID</title>
</head>
<body>
	<?php
// mysql_connect("localhost","user","pass");
// mysql_select_db("database_name");


$fname = $_REQUEST['fname'];
$lname =$_REQUEST['lname'];

$a= substr($fname,0,1);//Krishna
$b=substr($lname,0,1);
// echo $a.$b;

$m=date('d');
$y=date('M');
$d=date('Y');
// echo $m." ".$y." ".$d;
echo "<b>Your UserName:</b>".$a.$b.$m.$y.$d;
die();
echo "<br/>";
// Get the row Counts
$Getsid=mysql_query("SELECT * FROM 'user'");
$Getsid1=mysql_num_rows($Getsid);
$invID = str_pad($Getsid1, 4,'0',STR_PAD_LEFT);
echo $sid=$a.$b.$y.$m.$d.$invID;
mysql_query("INSERT INTO 'user'('fname','lname','sid') VALUES('$fname','$lname','$sid')");
	?>
<form action="" method="post">
	First Name:<input type="text" name="fname">
	<br/>
	Last Name:<input type="text" name="lname">
      <br/>
      <input type="submit" name="submit" value="SUBMIT">

</form>

</body>
</html>