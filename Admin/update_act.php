<?php
	$join=mysqli_connect("localhost","root","","cms");
	$y=$_REQUEST['id'];
	$b=$_REQUEST['firstname'];
	$c=$_REQUEST['middlename'];
	$d=$_REQUEST['lastname'];
    $e=$_REQUEST['dateofbirth'];
    
    $g=$_REQUEST['phonenumber'];
    $h=$_REQUEST['parentsnumber'];
    $i=$_REQUEST['email'];
    $j=$_REQUEST['pass'];
	$f=$_REQUEST['gender'];

	$sql="UPDATE stureg SET first_name='$b',middle_name='$c',last_name='$d',dob='$e',phone_number='$g',parents_number='$h',	email='$i',	gender='$f' WHERE id=".$y;
	
	$result=mysqli_query($join,$sql);
	
	if($result)
	{
		echo "Your data has been updates successfully...";
		echo "<br>";
		//echo "<a href='view1.php'>View Result";
		header("Location: admin_panel.php");
	}
	else
	{
		echo "Error";
	}


?>