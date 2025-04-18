<?php
	$join=mysqli_connect("localhost","root","","college_proj");
	$y=$_REQUEST['id'];
//	$b=$_REQUEST['firstname'];
//	$c=$_REQUEST['middlename'];
//	$d=$_REQUEST['lastname'];
//  $e=$_REQUEST['dateofbirth'];
    
//    $g=$_REQUEST['phonenumber'];
 //   $h=$_REQUEST['parentsnumber'];
 //   $i=$_REQUEST['email'];
 //   $j=$_REQUEST['pass'];
	//$f=$_REQUEST['gender'];

	$sql="DELETE from student_info WHERE id=".$y;
	
	$result=mysqli_query($join,$sql);
	
	if($sql)
	{
		echo "The record is been deleted...";
		echo "<br>";
		header("Location: admin_panel.php");
	}
	else
	{
		echo "Error";
	}


?>