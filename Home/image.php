<html>
    <head>
        <title>Image</title>
    </head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jay";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT img FROM image WHERE id = 1"; 
$res = mysqli_query($conn,$display);

while($row=mysqli_fetch_array($res))
{
    echo $row["img"];
}



?>
</body>
</html>