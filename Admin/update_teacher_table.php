<?php
	$join=mysqli_connect("localhost","root","","cms");
	$id = $_POST['id'];
	$name = $_POST['name'];
	$qualification = $_POST['qualification'];
	$category = $_POST['category'];
	$lan_of_teaching = $_POST['lan_of_teaching'];
	$experience = $_POST['experience'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$address = $_POST['address'];

	$sql="UPDATE teareg SET name='".$name."',qualification='".$qualification."',category='".$category."',lan_of_teaching='".$lan_of_teaching."',experience='".$experience."',gender='".$gender."',phone_number='".$phone_number."',email='".$email."',password='".$password."',address='".$address."' WHERE id='".$id."'";
	
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