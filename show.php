<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div style="text-align:right; direction:rtl;">
<?php
$HostName="localhost";
$db_name="ttest";
$LoginName="root";
$LoginPassword="";

   
?>
 <?php
	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM persons" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>


  الاسم <?php echo "$row[person_name]"."   "?>



 السن <?php echo "$row[person_age]"."<hr>"?>
<a href="delete.php?person_id=<?php print $row["person_id"] ?>"> <input type="submit" value="حذف" /></a><hr />

  <?php
	;}
	 mysql_close($con);
	?>
    <br />
<a href="registeration.php">insert</a><br />

    <a href="show.php">Show</a>
<a href="update.php">update</a>
</div>
</body>
</html>
