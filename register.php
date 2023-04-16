<?php
$con=mysqli_connect("localhost","root","","locall");

 $name=$_POST["name"];
 $email=$_POST["email"];
 $pas1=$_POST["pas1"];
$statement="insert into register(name,email,password) values ('$name','$email','$pas1')";
$res=mysqli_query($con,$statement);
if(!($con)){
    if(!($res))
        echo "wrong query";
    else
        echo "could not connect";
    }
else
    echo "<h1>registered succesfully</h1>";
    header('Location:http://127.0.0.1/Project/loginform.php');
?>