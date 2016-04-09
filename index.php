<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test Website</title>
</head>

<body>
<?php echo"Hi tito"."<br/>";?>
<?php 
$nickname="MR";
$MR="Mohammed";
echo $MR."<br/>";
echo $nickname ." ". $$nickname."<br/>";
$a=2;$b=3;$v=4;
$c=$a+$b;
$d=$a*$b;
print $c ." or ".$d."<br/>";
echo $c+$d."<br/>";
$arr=array('a','b','v');
foreach($arr as $name){
	echo $$name."<br/>";

	}

$s1='Ashraf'." ";
$s2 = 'Ali'." ";
$s3='mohammed';

$arr=array('s1','s2','s3' );
echo $$arr[0]. "<br/>";
foreach($arr as $tot){
	echo $$tot;
	};
?>
</body>
</html>