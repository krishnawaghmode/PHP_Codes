<?php
echo "<h2>Redirect using PHP.</h2>";
?>
<pre>
    // header('Location: redirect.php');
    // header("Location: redirect.php");

  //Set Refresh header using PHP.
  // header( "refresh:5;url=http://localhost/PHP_Codes/Redirect.php" );

  //Sleep for five seconds.
sleep(5);

//Redirect using the Location header.
header('Location: http://www.test.com');

//exit to prevent the rest of the script from executing
exit;
</pre>
<?php


// -----------------------------------------------
echo "<h2>Redirecting with JavaScript.</h2>";
?><pre>
<!-- <script> -->
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= 'http://www.test.com';
}, 5000);
<!-- </script> -->
</pre>
<?php


// -------------------------------------------------------
 echo "<h2>Redirect using META tags / HTML.</h2>";

 echo "A meta tag that redirects after 5 seconds to one of my PHP tutorials";
 echo "<br>";
 echo htmlspecialchars("<meta http-equiv='refresh' content='5;url=http://www.demo.com'>");
 echo "<br>";
 echo htmlentities("<meta http-equiv='refresh' content='5;url=http://www.demo.com'>");






