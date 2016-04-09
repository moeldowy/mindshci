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
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$person_id= $_GET['person_id'] ;
	if ( isset($_GET['person_id'])) {
	$sql = "DELETE FROM persons WHERE person_id ='$person_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?><br />
<a href="sanaa_reg.php">insert</a><br />

<a href="sanaa_show.php">Show</a>
<a href="update.php">update</a>


</body>
</html>