<?php
if(isset($_POST['click'])) {
	if(!empty($_POST['variable_check']))
	{
		echo "Value: ".$_POST['variable_check'];
		echo "<br>";
		echo "Active: ".$active=1;
	}else
	{
		echo "Value: Checkbox not select<br>";
		echo "Block: ".$active=0;;
	}
}
?>
<form method="POST" action="">
	<lable>Checkbox: </lable>
	<input type="checkbox" name="variable_check" value="0"/> <br>
	<input type="submit" name="click" value="Submit" />
</form>
<pre id="code" style="background-color: #065819f5;color: #fff;">
						if(isset($_POST['click'])) {
						if(!empty($_POST['variable_check']))
						{
							echo "Value: ".$_POST['variable_check'];
							echo "Active: ".$active=1;
						}else
						{
							echo "Value: Checkbox not select";
							echo "Block: ".$active=0;;
						}
					}
</pre>
