<?php 
$origin=$_GET['ostn'];
$destiny=$_GET['dstn'];

if($origin==$destiny)
{
echo "<script> alert(\"Origin and destination station cannot be same\"); window.location.href='MehulProject.php'; </script>";
//header('Location: http://localhost/Project/MehulProject.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Your Fare</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">

<body style=" background-color: cyan ">
<br><br><br><div align="center" style="background-image:url(stnbg.png);background-repeat: no-repeat;background-size: 60% 100%; background-position: center;">
<div align="left" class="w3-bar w3-top w3-border w3-teal">
  <a href="MehulProject.php" class="w3-btn w3-ripple w3-teal w3-hover-black"><img src="Localogo.PNG" height="35" width="40"/></a>
  </div>

<?php

class Connector
{
	public $distance=0;
	public $source=0;
	public $destination=0;
	function Connector($src,$dst)
	{
		$this->source=$src;
		$this->destination=$dst;
	}
	function isSameline()
	{
		/* To check whether both the stations are in same line or not. Return boolean */
		if(abs($this->source-$this->destination)<50)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getConnectorStation()
	{
		// Todo: If its returning multiple rows, we have to consider the closest one to the station, relevant connector
		$complexfare=new DBConnection();
		$this->distance=$complexfare->getDistance($this->source,$this->destination);
		return $this->distance;
	}
	function stnCount()
	{
		if(Connector::isSameline())
		{
			return $this->distance=abs($this->source-$this->destination);
		}
		else
		{
			return $this->distance=Connector::getConnectorStation();
		}
	}
	function calculateFare()
	{
		$stn=$this->stnCount();
		$fare=5;
		if($stn<8)
			$fare=5;
		if($stn>7&&$stn<16)
			$fare=10;
		if($stn>15&&$stn<22)
			$fare=15;
		if($stn>21)
			$fare=20;
		if($this->destination>128&&$this->destination<137)
			$fare=$fare+10;
		return $fare;
	}
	function printFare()
	{
		echo "Fare is : ".$this->calculateFare()." rupees.";
	}
}
class DBConnection extends Connector
{
	// all the sql database communication to be done via this class
	public $connection,$distance=0;
	public $source,$destination;
	function DBConnection()
	{
		/* Connect to the database. Establish connection */
		$user = 'root';
		$pass = '';
		$db = 'loc-all database';
		$this->connection = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");	
		if($this->connection==false)
		{
			die("Error : Could not connect ".mysqli_connect_error());
		}
		else
		{
			//echo "Connection successful<br>";
		}
	}
	function getDifference($a,$b)
	{
		return abs($a-$b);
	}
	function getDistance($src,$dest)
	{
		$this->source=$src;
		$this->destination=$dest;
		//$query="select name, group_concat(id), count(1) as cnt from stations group by name having cnt>1";
		$query="SELECT * FROM stations";
		if($result=mysqli_query($this->connection,$query))
		{
			//echo "Query successful";
			while($row=mysqli_fetch_array($result))
			{
				if($row['id']!=$row['sid'])
				{
					$hub[0]=$row['id'];
					$hub[1]=$row['name'];
					$hub[2]=$row['sid'];
					$distance=$this->getDifference($src,$hub[0]);
					$distance+=$this->getDifference($dest,$hub[2]);
					return $distance;
				}
				
				//echo "{$row['id']}  <br>  {$row['name']}  <br>  {$row['sid']}<br>";
			}
		}
		else
		{
			echo "Query fail";
		}
	}
	function getStationName($code)
	{
		$sql="SELECT name FROM stations WHERE id=$code";
		$result=mysqli_query(mysqli_connect("localhost","root","","locall"),$sql);
		$data = mysqli_fetch_array($result);

		echo $data['name'];
	}
}?>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div align="center" ><h2 style="color:yellow;font-weight: bold;"><?php 
$origin=$_GET['ostn'];
$destiny=$_GET['dstn'];
if($origin==$destiny)
{
echo "<script> alert(\"Origin and destination station cannot be same\"); window.location.href='MehulProject.php'; </script>";
//header('Location: http://localhost/Project/MehulProject.php');
}
else
{
$root_Obj=new Connector($origin,$destiny);

$Obj=new DBConnection();
	$Obj->getStationName($origin);
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<span style=\"text-align: left\">";
	$Obj->getStationName($destiny);
	echo "</span>";
	?></h2>

</div>
<div>
<h2 style="color:yellow;font-weight: bold;">
<?php
$root_Obj->printFare();
//$root=new DBConnection();
}
?>
</h2>
</div>
 <a href="loginform.php" class="w3-button w3-teal w3-ripple w3-hover-black" style="width:30%;border:2px solid w3-black">Book Ticket</a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

</body>
</html>