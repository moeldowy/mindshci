<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="ttest";
$LoginName="root";
$LoginPassword="";




	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE persons SET  person_name= '$_GET[person_name]',person_age='$_GET[person_age]' WHERE  person_id= '$_GET[person_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
  


?>
<a href="registeration.php">insert</a><br />

<a href="show.php">Show</a>
<a href="update.php">update</a>
</body>
</html>