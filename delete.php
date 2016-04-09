<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
	
	$person_id= $_GET[person_id] ;
	if ( isset($_GET['person_id'])) {
	$sql = "DELETE FROM persons WHERE person_id ='$person_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?><br />
<a href="registeration.php">insert</a><br />

<a href="show.php">Show</a>
<a href="update.php">update</a>
</body>
</html>
