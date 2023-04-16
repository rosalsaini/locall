<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Local.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php 
$er_email="";
$er_pass=""; 
?>
<div align="left" class="w3-bar w3-top w3-border w3-teal">
  <a href="MehulProject.php" class="w3-btn w3-ripple w3-teal w3-hover-black"><img src="Localogo.PNG" height="35" width="40"/></a>
</div>

<h2 class="rh2">Login form</h2>
<form name="myform" method="post" action="validation.php">
<div class="imgcarry">
<img src="LOG1.PNG" alt="LOG1" class="reg">
</div>
<div class="carry">

<label><b>Email </b><label><span class="err"><?php echo $er_email; ?></span><br/>
<input type="email" name="email" placeholder="Enter your email" required><br/>

<label><b>Password </b><label><span class=err><?php echo $er_pass; ?></span><br/>
<input type="password" placeholder="Enter your password" name="password" min="" required><br/>

<table border="0" padding="5px" width="100%">
<tr>
<td><a href="bookticket.php"><button type="submit" name="btn" style="background-color:#00aadd">Enter</button></a></td>
<td><a href="MehulProject.php"><button type="button" style="background-color:#dd0000" >Cancel</button></a></td>
<td colspan="3" align="right"><b><p>Not a user? <a href="registerform.php">Register here</a></p></b></td>
</tr>
<table>
</div>
</form>
</body>
</html>