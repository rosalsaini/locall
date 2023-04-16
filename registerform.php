<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="Local.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php 
$er_pass=""; 
?>
<div align="left" class="w3-bar w3-top w3-border w3-teal">
  <a href="MehulProject.php" class="w3-btn w3-ripple w3-teal w3-hover-black"><img src="Localogo.PNG" height="35" width="40"/></a>
</div>

<h2 class="rh2">Registration form</h2>
<form method="post" action="register.php">
<div class="imgcarry">
<img src="REG1.PNG" alt="REG1" class="reg">
</div>
<div class="carry">
<label><b>Name</b><label><br/>
<input type="text" name="name" placeholder="Enter your full name" required>
<br/>
<label><b>Email</b><label><br/>
<input type="email" name="email" placeholder="Enter your email address" required><br/> 
<label><b>Password</b><label><br/>
<input type="password" name="pas1" placeholder="Enter strong password" required ><br/>

<table border="0" padding="5px" width="100%">
<tr>
<td colspan="2"><a href="register.php"><Button type="submit" style="background-color:#00aadd" name="btn">Register</button></a></td>
<td><a href="MehulProject.php"><Button type="button" style="background-color:#dd0000" onclick="loginform.php">Cancel</button></a></td>
<td align="right"><b>User? <a href="loginform.php">Login</a></b></td>
</tr>
<table>
</div>
</form>
</body>
</html>