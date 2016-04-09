<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Registeration</title>
</head>

<body>
<form name="myform" method="post">
<pre>name:<input type="text" name="person_namee" id="person_name"></pre>
<pre>Age: <input type="number" name="person_agee" id="person_age"></pre>
<input type="submit">
<?php 
$servername="localhost";
$dbname="ttest";
$username="root";
$password="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//mysqli_query("set names 'utf8'");
if (!$conn){die('Could not connect: ' . mysql_error());}
//mysql_select_db($db_name , $conn);
if ( isset($_POST['person_namee']) && isset($_POST['person_agee']) ) {
$sql = "INSERT INTO persons (person_name,person_age) VALUES ('$_POST[person_namee]' ,'$_POST[person_agee]' )" ;
};
/*if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};*/


//mysqli_query($sql,$conn) ;

mysqli_close($conn);

?>
</form>
<hr>
<a href="show.php">Show</a>
<a href="update.php">update</a>

</body>
</html>