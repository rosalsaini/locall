<?php 
$origin=$_GET['ostn'];
$destiny=$_GET['dstn'];

if($origin==$destiny)
{
echo "<script> alert(\"Origin and destination station cannot be same\"); window.location.href='bookticket.php'; </script>";
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
<br><br><br>

<div align="center" class="w3-white w3-hover-shadow w3-round w3-border" style="max-width: 50%;" >

<div class="w3-bar w3-red">
<table>
<tr>
<td align="left"><p style="text-align: left;">HAPPY JOURNEY</p></td>
<td>
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
<img src="Localogo.PNG" style="max-width: 60px;">
<?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>
</td>
<td>
<p>शुभ यात्रा</p>
</td>
</tr>
</table>
</div>

<div align="center" style="background-image:url(stnbg.png);background-repeat: no-repeat; background-size: 60% 100%; background-position: center;">
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
		$db = 'locall';
		$this->connection = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect");	
		if($this->connection==null)
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
		//$result=mysqli_query($this->connection,$sql);
		$result=mysqli_query(mysqli_connect("localhost","root","","locall"),$sql);
		
		$data = mysqli_fetch_array($result);

		echo $data['name'];
	}
}?>

<p align="left" style="font-family:'Orbitron', sans-serif;color: black; font-weight: bold; text-decoration-color: black;">PNR no : <?php $origin=$_GET['ostn'];$destiny=$_GET['dstn'];

echo intval($origin)+intval($destiny)*85421; ?></p>
<br>
<br>
<br>
<br>

<div align="center" ><h4 style="color:yellow;font-weight: bold;"><?php 
$origin=$_GET['ostn'];
$destiny=$_GET['dstn'];

if($origin==$destiny)
{
echo "<script> alert(\"Origin and destination station cannot be same\"); window.location.href='bookticket.php'; </script>";
//header('Location: http://localhost/Project/MehulProject.php');
}
else
{
$root_Obj=new Connector($origin,$destiny);

$Obj=new DBConnection();
	$Obj->getStationName($origin);
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	//echo "<span style=\"text-align: left\">";
	$Obj->getStationName($destiny);
	//echo "</span>";
	?></h4>
</div>
<div>
<h4 style="color:yellow;font-weight: bold;">
<?php
$root_Obj->printFare();
}
//$root=new DBConnection();
?>
</h4>
</div>
<?php
 //<a href="bookticket.php" class="w3-button w3-teal w3-ripple w3-hover-black" style="width:30%;border:2px solid w3-black"></a>
?>
<br>
<br>
<br>
<br>
<br>
</div>
<br>
<div class="w3-padding" style="background-color: black;" >
<p align="left" class="w3-black w3-small">1. Journey should be commenced within 1 hour from <?php $now=new DateTime(); echo $now->format('H:m:s Y-m-d'); ?></p>
<p align="left" class="w3-black w3-small">2. Ticket is valid till the midnight of <?php $now=new DateTime('tomorrow'); echo $now->format('Y-m-d'); ?></p>
</div>
</div>
</div>
</body>
</html>