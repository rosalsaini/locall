<html>
<title>Log in</title>
<body>
<div align="left" class="w3-bar w3-top w3-border w3-teal">
  <a href="MehulProject.php" class="w3-btn w3-ripple w3-teal w3-hover-black"><img src="Localogo.png" height="35" width="40"/></a>
</div>

<?php
  
$con = mysqli_connect("localhost","root","","locall");

$email= $_POST['email'];
$password = $_POST['password'];

$statment = "SELECT id from register WHERE email='$email' AND password='$password'";

$res = mysqli_query($con, $statment);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
                //header('Location:http://localhost/locall/bookticket.php');  
				echo "<script>window.location.href='bookticket.php';</script>";

	}
	
}

$row= mysqli_num_rows($res);

if(!$row)
{     
	echo '<h1><a href="loginform.php">Invalid Login Details try again</a></h1>';
	echo "<script> alert(\"Invalid Login Details try again\"); window.location.href='loginform.php'; </script>";
}

?>
</body>
</html>