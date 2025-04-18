<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
  <div>

  </div>
</body>
</html>-->
<?php
include("database.php");
// Check connection

  if(isset($_POST['submit'])){
    $name = $_POST['txtadminName'];
    $password = $_POST['txtadminPassword'];
    $email = $_POST['txtadminEmail'];
  }
 /* $sql_for_name_password = "SELECT * FROM admin_register WHERE name='$name' AND password='$password'";
  $result = mysqli_query($conn, $sql_for_name_password);
     // check if there are any results
     if (mysqli_num_rows($result) > 0) {
    // authentication successful
    //echo "Authentication successful!";
    header("Location: admin_panel.php");
    exit;
     } else {
    // authentication failed
    //echo "Authentication failed!";*/
    $sql = "INSERT INTO adminreg VALUES ('','".$name."','".$password."','".$email."','')";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>