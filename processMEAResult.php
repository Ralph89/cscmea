<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db_username = "..";
$db_password = "..";
$db_database = "..";
$connection = new mysqli('localhost',$db_username,$db_password,$db_database);
if($connection === false) {
  echo "could not connect to database";
}
$playername = "'" . mysqli_real_escape_string($connection,$_GET["username"]) . "'";
$planetName = "'" . mysqli_real_escape_string($connection,$_GET["planetName"]) . "'";
?>
<html>
<body>
<table>
<?php
$resourceArray = $_GET["resource"];
$amountArray = $_GET["resourceAmount"];
//create sql  loop twice
$sql = "INSERT INTO `csc_data` (`playername`,`planetName`";
$arr_length = count($resourceArray); 
for($i=0;$i<$arr_length;$i++) 
{ 
	$amount = $amountArray[$i];
	if($amount > 0)
	{
		$resourceName = $resourceArray[$i];
		$sql = $sql . "," . $resourceName . ""; 
		//Insert the resource into the database
		//check if there is already a result for our name & planet in the database 
		//if not: 
		//$result = mysqli_query($connection,("INSERT INTO `csc_data` (`playername`,`planetName`," . $resourceName . ") VALUES (" . $playername . "," . $planetName . "," . $amount . ")
		//if so get value and 
		
		//increase with new
		
		//update database with new value
		//
	}
}
$sql = $sql . ") VALUES (" . $playername . "," . $planetName . "";
for($i=0;$i<$arr_length;$i++) 
{ 
	$amount = $amountArray[$i];
	if($amount > 0)
	{
		$sql = $sql . "," . $amount . ""; 
	}
}
$sql = $sql . ")";
$result = mysqli_query($connection,$sql);
if($result === false) {
    // Handle failure - log the error, notify administrator, etc.
	echo "Could not post in database error while processing";
} else {
	echo "succesfull posted in the database";
}
?>
</table>

</body>
</html> 