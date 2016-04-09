<?php 
$HostName="localhost";
$db_name="employee";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
mysql_query("set names 'utf8'");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['emp_name']) && isset($_POST['emp_gender']) && isset($_POST['emp_birthdate']) && isset($_POST['emp_city']) ) {
$sql = "INSERT INTO emp (emp_name,emp_gender,emp_birthdate,emp_city) VALUES ('$_POST[emp_name]','$_POST[emp_gender]','$_POST[emp_birthdate]','$_POST[emp_city]')" ;
} else {
$sql = '';
}

mysql_query($sql,$con) ;

mysql_close($con);

?>