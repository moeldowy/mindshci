<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 

/*$s=4;
if($s<9){
	
	echo"yes";
	}
else{echo"no"."<br/>";}*/


/*for($i=4;$i<10;$i++){
	echo"<img src='10686659_10203469761689605_122273134345983491_n.jpg' width='150' height='150'/>"."<pre><input type='text'></pre>";
	
	}*/
/*	$arr=array("<img src='10686659_10203469761689605_122273134345983491_n.jpg' width='150' height='150'/>","bmw1","bmw2");
$arr[0]=2;
echo $arr[0]
*/

/*$cars=array("bmw1","bmw2","bmw3");	
	foreach($cars as $value){
		echo ($value);
		
		};*/


/*$g=5;
while($g<10){
	echo"hi";
	$g++;
	
	}*/
	
	
	/*$g=0;
	do{echo"hi";
	$g++;}
	while($g<10);*/


	
		
		/*$loza = "saloza";
		switch ($loza){
			case "baloza":
			echo "mohamed is baloza";
			break;
			
			case "faloza":
			echo "mohamed is caloza";
			break;
			default:
			echo"laaa" ;
			echo"laaa2" ;
			}*/?>
            
            
			<!--<form name="myform" method="post">
 <input type="text" name="pname"><br>

 <input type="radio" name="rad" value="rad1">
 <input type="submit"><br>

 </form>-->
 <?php
 /*if(isset ($_POST['pname'])){
	$pname = $_POST['pname'];
	echo "hi"." ".$pname;
	if($pname=="mohammed"){
		echo "قشطة";
		}
   };*/
  /*if(isset ($_POST['rad'])){
	$rad = $_POST['rad'];
	if($rad=="rad1"){
		echo "اجابة صحيحة";
		}
   };*/
   
   ?>
   <form  method="post">
  Answer 1 <input type="radio" name="ans" value="ans1" /><br />
  Answer 2 <input type="radio" name="ans" value="ans2"  /><br />
  Answer 3 <input type="radio" name="ans" value="ans3"  /><br />
  Answer 4 <input type="radio" name="ans" value="ans4"  /><br />
  <input type="submit" value="submit" />
</form>
 <?php 
 if(isset ($_POST['ans'])){
	$ans = $_POST['ans'];
	if($ans=="ans1"){
		echo "اجابة صحيحة";
		}
		else{
					echo "اجابة خاطئة";

			}
   };
 
 ?>
 
 
</body>
</html>