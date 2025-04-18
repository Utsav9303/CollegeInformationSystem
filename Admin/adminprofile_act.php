<?php
	$join=mysqli_connect("localhost","root","","college_proj");
	$y = $_REQUEST['id'];
	$name = $_REQUEST['name'];
    $g = $_REQUEST['phone_number'];
    $i = $_REQUEST['email'];
    $j = $_REQUEST['pass'];
	// $f=$_REQUEST['gender'];

	$sql="UPDATE adminreg SET name = '".$name."',email = '".$i."',password = '".$j."',phone_number = '".$g."' WHERE id=".$y;
	
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