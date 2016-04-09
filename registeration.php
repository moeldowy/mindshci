<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registeration</title>
</head>

<body>
<form name="myform" method="post">
<pre>name:<input type="text" name="person_name" id="person_name"></pre>
<pre>Age: <input type="number" name="person_age" id="person_age"></pre>
<input type="submit">
<?php 
$HostName="localhost";
$db_name="ttest";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
//mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['person_name']) && isset($_POST['person_age']) ) {
$sql = "INSERT INTO persons (person_name,person_age) VALUES ('$_POST[person_name]' ,'$_POST[person_age]' )" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;
//die('OK');
mysql_close($con);

?>
</form>
<hr>
<a href="show.php">Show</a>
<a href="update.php">update</a>

</body>
</html>