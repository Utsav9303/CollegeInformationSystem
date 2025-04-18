<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="student.css">
    <title>KDP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@500&family=Gelasio:ital@1&display=swap"
        rel="stylesheet">
    <link rel="Website icon" href="..\pictures\KDP_LOGO.png">
    <style>
    .button {
    display: inline-block;
    padding: 10px 30px;
    border: none;
    border-radius: 30px;
    background-color: #53aef0;
    color: #fff;
    font-size: 18px;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  
  .button:hover {
    background-color: #222;
  }
  </style>
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_proj";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_SESSION['user'];

if($user == true){

}
else{
    header("location: ../Login/login.php");
}

$sql = "SELECT * FROM student_info WHERE id = '$user'"; 
$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0)
{
    while($row = mysqli_fetch_assoc($res))
    {
    ?>
    <?php
    include('..\header.php');
    ?>
    <div class="body">
        <div class="student-container">
            <div class="left">
                <div class="header">
                    <h2>Personal info</h2>
                </div>
                <div class="photo">
                    
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['img']); ?>" /> 

                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2"> <?php echo "$row[name]"?> </td>
                        </tr>
                        <tr>
                            <td>Enrollment</td>
                            <td> <?php echo "$row[enroll_no]"?> </td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td> <?php echo "$row[department]"?> </td>
                        </tr>
                        <tr>
                            <td>Sem & Class</td>
                            <td> <?php echo "$row[sem]"?> </td>
                        </tr>
                        <tr>
                            <td>D.O.B</td>
                            <td> <?php echo "$row[dob]"?> </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td> <?php echo "$row[email]"?> </td>
                        </tr>
                        <tr>
                            <td>Mobile No.</td>
                            <td> <?php echo "$row[mobile_no]"?> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="middle">
                <div class="header">
                    <h2>Academic Info</h2>
                </div>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Academic Status</td>
                            <td> <?php echo "$row[status]"?> </td>
                        </tr>
                        <tr>
                            <td>Merit No</td>
                            <td> <?php echo "$row[merit_no]"?> </td>
                        </tr>
                        <tr>
                            <td>Current Sem Attandance</td>
                            <td> <?php echo "$row[attandance]"?> </td>
                        </tr>
                        <tr>
                            <td>Performance in exam</td>
                            <td> <?php echo "$row[performance]"?> </td>
                        </tr>
                        <tr>
                            <td>CPI</td>
                            <td> <?php echo "$row[cpi]"?> </td>
                        </tr>
                        <tr>
                            <td>CGPA</td>
                            <td> <?php echo "$row[cgpa]"?> </td>
                        </tr>
                        <tr>
                            <td>Current Backlogs</td>
                            <td> <?php echo "$row[backlog]"?> </td>
                        </tr>
                        <tr>
                            <td>Total Sem</td>
                            <td> <?php echo "$row[total_sem]"?> </td>
                        </tr>
                        <tr>
                            <td>Term End</td>
                            <td> <?php echo "$row[term_end]"?> </td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <div class="right">
                <div class="header">
                    <h2>Grade history</h2>
                </div>
                
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Semester </th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td>1st</td>
                            <td> <?php echo "$row[first]" ?> </td>
                        </tr>
                        <tr>
                            <td>2nd</td>
                            <td> <?php echo "$row[second]" ?> </td>
                        </tr>
                        <tr>
                            <td>3rd</td>
                            <td> <?php echo "$row[third]" ?> </td>
                        </tr>
                        <tr>
                            <td>4th</td>
                            <td> <?php echo "$row[fourth]" ?> </td>
                        </tr>
                        <tr>
                            <td>5th</td>
                            <td> <?php echo "$row[fifth]" ?> </td>
                        </tr>
                        <tr>
                            <td>6th</td>
                            <td> <?php echo "$row[sixth]" ?> </td>
                        </tr>
                    </tbody>
                </table>
                <div class="verify">
                    <h2>Verified by<br> K D Polytechnic</h2>
                </div><br><br><center>
                <a href="..\Logout\Logout.php" class="button">Log out</a>
                </center>
            </div>
        </div>
    </div>
    <?php
}
}
    ?>

<?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>